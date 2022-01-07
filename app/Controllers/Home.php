<?php

namespace App\Controllers;

use App\Models\PendaftarModel;
use App\Models\UsersModel;
use DateTime;

class Home extends BaseController
{
    public function index()
    {
        return view('home/index',['validation'=>$this->validation,'session'=> $this->session]);
    }

    public function daftar()
    {
        $model = model(PendaftarModel::class);
        $rules = $model->getValidationRules(['only'=>['kode_pendaftar','nama_lengkap','jenis_kelamin','tempat_lahir','tanggal_lahir','agama','no_telp_pribadi','no_telp_ortu','email','alamat','rt','rw','kel_desa','kecamatan','kota_kab','kode_pos','asal_sekolah']]);
        // dd($formData,$this->validate($rules),$rules,$this->request->getMethod());
        // $date = date_timestamp_get(new DateTime());
        $formData = $this->request->getPost();
        $generated_id = substr(uniqid(),-5);//($model->get()->getNumRows()+1) .$date%60 . substr($this->request->getPost('nama_lengkap'),0,1);
        $data = [
            'kode_pendaftar'        => $generated_id,
            'nama_lengkap'          => $formData['nama_lengkap'],
            'jenis_kelamin'         => $formData['jenis_kelamin'],
            'tempat_lahir'          => $formData['tempat_lahir'],
            'tanggal_lahir'         => $formData['tanggal_lahir'],
            'agama'                 => $formData['agama'],
            'no_telp_pribadi'       => $formData['no_telp_pribadi'],
            'no_telp_ortu'          => $formData['no_telp_ortu'],
            'email'                 => $formData['email'],
            'asal_sekolah'          => $formData['asal_sekolah'],
            'alamat'                => $formData['alamat'],
            'rt'                    => $formData['rt'],
            'rw'                    => $formData['rw'],
            'kel_desa'              => $formData['kel_desa'],
            'kecamatan'             => $formData['kecamatan'],
            'kota_kab'              => $formData['kota_kab'],
            'kode_pos'              => $formData['kode_pos'],
            'status_pendaftaran'    => 'proses_pembayaran'
        ];
        if($model->insert($data) and $this->buat_akun($formData['nama_lengkap'],$formData['email'],$generated_id)){
            return redirect()->to('/')->with('success', 'Silahkan cek secara berkala email untuk mendapatkan akun PPDB SMK Al-Falah.');
        }else{
            return redirect()->to('/')->with('notification', 'Terjadi kesalahan dalam mendaftar');
        }
    }

    public function send_email($email,$password)
    {
        $mail = service('email');
        $mail->setNewline("\r\n");

        $mail->setTo($email);

        $mail->setSubject('Akun PPDB SMK Al-Falah');
        $mail->setMessage("Email : $email <br> Password : $password <br> Silahkan login pada halaman berikut : \n ".base_url().'/siswa/login');
        return $mail->send();
    }

    public function buat_akun($nama,$email,$generated_id)
    {
        $userModel = model(UsersModel::class);
        $data = [
            'nama_lengkap'=>$nama,
            'email' => $email,
            'password' => password_hash($generated_id,PASSWORD_DEFAULT),
            'role' => 'pendaftar'
        ];
        // Kirim email berisi akun (email dan password) kepada pendaftar
        return ($userModel->insert($data) && $this->send_email($email,$generated_id));
    }

}


