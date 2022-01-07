<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PendaftarModel;
use App\Models\UsersModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Administrator extends BaseController
{
    public function index()
    {
        $userModel = model(UsersModel::class);
        $pendaftarModel = model(PendaftarModel::class);
        $data['users'] = $userModel->findAll();
        $data['pendaftar'] = $pendaftarModel;
        $data['session'] = $this->session;
        return view('administrator/index',$data);
    }

    public function peserta($status = 'terdaftar')
    {
        $pendaftarModel = model(PendaftarModel::class);
        if ($status == 'terdaftar') {
            $data['pendaftar'] = $pendaftarModel->findAll();
        }elseif ($status == 'verifikasi') {
            $data['pendaftar'] = $pendaftarModel->where(['status_pendaftaran'=>'verifikasi'])->findAll();
        }elseif ($status == 'lolos') {
            $data['pendaftar'] = $pendaftarModel->where(['status_pendaftaran'=>'lolos'])->findAll();
        }elseif ($status == 'tidak_lolos') {
            $data['pendaftar'] = $pendaftarModel->where(['status_pendaftaran'=>'tidak_lolos'])->findAll();
        }else{
            throw new PageNotFoundException("Page $status Not Found");
        }
        $data['status'] = $status;
        $data['session'] = $this->session;
        return view('administrator/peserta',$data);
    }

    public function detail_peserta($kode_pendatar)
    {
        $pendaftarModel = model(PendaftarModel::class);
        $data['pendaftar'] = $pendaftarModel->where(['kode_pendaftar'=>$kode_pendatar])->first();
        $data['session'] = $this->session;
        return view('administrator/peserta_detail',$data);
    }

}
