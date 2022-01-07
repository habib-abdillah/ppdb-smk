<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pendaftar extends BaseController
{
    public function index()
    {
        $userModel = model(UsersModel::class);
        $pendaftarModel = model(PendaftarModel::class);
        $data['users'] = $userModel->findAll();
        $data['pendaftar'] = $pendaftarModel->where(['email'=>$this->session->account['email']])->first();
        $data['session'] = $this->session;
        return view('peserta/index',$data);
    }
    
    public function data_pendaftaran()
    {
        $pendaftarModel = model(PendaftarModel::class);
        $data['pendaftar'] = $pendaftarModel->where(['email'=>$this->session->account['email']])->first();
        $data['session'] = $this->session;
        return view('peserta/datadiri',$data);
    }
}