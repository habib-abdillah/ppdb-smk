<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Account extends BaseController
{
    public function login($arg)
    {
        $model = model(UsersModel::class);
        $rules = $model->getValidationRules(['only'=>['email','password']]);
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && $this->validate($rules)) {
            $inputEmail = $this->request->getPost('email');
            $inputPassword = $this->request->getPost('password');
            if(count($model->getUserByEmail($inputEmail))){
                $userAccount = $model->getUserByEmail($inputEmail);

                // dd($arg,$userAccount['role'],!($userAccount['role'] != 'pendaftar' && $arg == 'peserta'));
                if ($userAccount['role'] != 'pendaftar' && $arg == 'peserta') {
                    return redirect()->route('login_peserta')->with('issue','Untuk login sebagai admin silahkan klik <a href="'.base_url('/admin/login').'">disini</a>');
                }elseif ($userAccount['role'] == 'pendaftar' && $arg != 'peserta') {
                    return redirect()->route('login')->with('issue','Untuk login sebagai peserta silahkan klik <a href="'.base_url('/peserta/login').'">disini</a>');
                }else {
                    if (password_verify($inputPassword,$userAccount['password'])) {
                        $this->session->set('account',[
                            'name'=>$userAccount['nama_lengkap'],
                            'email'=>$userAccount['email'],
                            'role'=>$userAccount['role']
                        ]);
                        if ($userAccount['role'] != 'pendaftar') {
                            return redirect()->route('admin')->with('success', 'Selamat datang '.$this->session->account['name']);
                        }else {
                            return redirect()->to('/peserta')->with('success', 'Selamat datang '.$this->session->account['name']);
                        }
                    }else{
                        return redirect()->route('login')->with('notification', 'Password salah');
                    }
                }
            }else{
                return redirect()->route('login')->with('notification', 'User tidak ditemukan');
            }
        } else {
            return view('home/login',['for'=>$arg,'validation'=>$this->validation]);
        }
    }

    public function logout($arg)
    {
        $this->session->destroy();
        if ($arg == 'admin') {
            return redirect()->route('login');
        }else {
            return redirect()->route('login_peserta');
        }
    }
}
