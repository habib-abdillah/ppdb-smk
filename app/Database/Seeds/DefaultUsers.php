<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DefaultUsers extends Seeder
{
    public function run()
    {
        $default_users = [
            [
            'nama_lengkap'=>'adminppdb',
            'email'=>'adminppdb@gmail.com',
            'password'=>password_hash('adm1nppdb',PASSWORD_DEFAULT),
            'role'=>'admin'
            ],
            [
            'nama_lengkap'=>'operatorppdb',
            'email'=>'operatorppdb@gmail.com',
            'password'=>password_hash('operat0rppdb',PASSWORD_DEFAULT),
            'role'=>'operator'
            ]
        ];
        foreach($default_users as $users){
            $this->db->table('users')->insert($users);
        }
    }
}
