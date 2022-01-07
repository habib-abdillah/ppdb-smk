<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'users';
    protected $primaryKey           = 'user_id';
    protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'array';
    protected $useSoftDeletes       = false;
    protected $protectFields        = true;
    protected $allowedFields        = [
        'nama_lengkap',
        'email',
        'password',
        'role',
        'kode_pendaftar'
    ];

    // Dates
    protected $useTimestamps        = false;
    protected $dateFormat           = 'datetime';
    protected $createdField         = 'created_at';
    protected $updatedField         = 'updated_at';
    protected $deletedField         = 'deleted_at';

    // Validation
    protected $validationRules = [
        'nama_lengkap'      => ['label'=>'Nama Lengkap','rules'=>'required'],
        'email'             => ['label'=>'Email','rules'=>'required|valid_email'],
        'password'          => ['label'=>'Password','rules'=>'required|min_length[5]'],
        'role'              => ['label'=>'Role','label'=>'required'],
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks       = true;
    protected $beforeInsert         = [];
    protected $afterInsert          = [];
    protected $beforeUpdate         = [];
    protected $afterUpdate          = [];
    protected $beforeFind           = [];
    protected $afterFind            = [];
    protected $beforeDelete         = [];
    protected $afterDelete          = [];

    public function getUserByEmail($email)
    {
        $all = $this->findAll();
        foreach ($all as $a) {
            if ($a['email'] == $email) {
                return $a;
            }
        }
    }
}
