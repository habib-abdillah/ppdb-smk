<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftarModel extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'pendaftar';
    protected $primaryKey           = 'id_pendaftar';
    protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'array';
    protected $useSoftDeletes       = false;
    protected $protectFields        = true;
    protected $allowedFields        = [
        'kode_pendaftar',
        'nama_lengkap',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'no_telp_pribadi',
        'no_telp_ortu',
        'email',
        'nik',
        'no_kk',
        'anak_ke',
        'alamat',
        'rt',
        'rw',
        'kel_desa',
        'kecamatan',
        'kota_kab',
        'provinsi',
        'kode_pos',
        'asal_sekolah',
        'npsn_sekolah',
        'nisn',
        'tahun_lulus',
        'status_pendaftaran',
        'jurusan',
        'ukuran_baju',
        'ukuran_peci',
    ];

    // Dates
    protected $useTimestamps        = false;
    protected $dateFormat           = 'datetime';
    protected $createdField         = 'created_at';
    protected $updatedField         = 'updated_at';
    protected $deletedField         = 'deleted_at';

    // Validation
    protected $validationRules      = [
        // "kode_pendaftar"        => 'required',
        // "nama_lengkap"          => 'required',
        // "jenis_kelamin"         => 'required',
        // "tempat_lahir"          => 'required',
        // "tanggal_lahir"         => 'required',
        // "agama"                 => 'required',
        // "no_telp_pribadi"       => 'required',
        // "no_telp_ortu"          => 'required',
        // "email"                 => 'required',
        // "nik"                   => 'required',
        // "no_kk"                 => 'required',
        // "anak_ke"               => 'required',
        // "alamat"                => 'required',
        // "rt"                    => 'required',
        // "rw"                    => 'required',
        // "kel_desa"              => 'required',
        // "kecamatan"             => 'required',
        // "kota_kab"              => 'required',
        // "provinsi"              => 'required',
        // "kode_pos"              => 'required',
        // "asal_sekolah"          => 'required',
        // "npsn_sekolah"          => 'required',
        // "nisn"                  => 'required',
        // "tahun_lulus"           => 'required',
        // "status_pendaftaran"    => 'required',
        // "jurusan"               => 'required',
        // "ukuran_baju"           => 'required',
        // "ukuran_peci"           => 'required',
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
}
