<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddPendaftar extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pendaftar' => [
                'type' => 'INT',
                'constraint' => 6,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'kode_pendaftar' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'unique' => true,
                'null' => false
            ],
            'nama_lengkap' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => false
            ],
            'jenis_kelamin' => [
                'type' => 'ENUM',
                'constraint' => ['laki-laki', 'perempuan'],
                'null' => false
            ],
            'tempat_lahir' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => false
            ],
            'tanggal_lahir' => [
                'type' => 'DATE',
                'null' => false
            ],
            'agama' => [
                'type' => 'VARCHAR',
                'constraint' => 25,
                'null' => false
            ],
            'no_telp_pribadi' => [
                'type' => 'VARCHAR',
                'constraint' => 25,
                'null' => true
            ],
            'no_telp_ortu' => [
                'type' => 'VARCHAR',
                'constraint' => 25,
                'null' => true
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => false
            ],
            'nik' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true
            ],
            'no_kk' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true
            ],
            'anak_ke' => [
                'type' => 'VARCHAR',
                'constraint' => 2,
                'null' => true
            ],
            'alamat' => [
                'type' => 'TEXT',
                'null' => false
            ],
            'rt' => [
                'type' => 'VARCHAR',
                'constraint' => 5,
                'null' => false
            ],
            'rw' => [
                'type' => 'VARCHAR',
                'constraint' => 5,
                'null' => false
            ],
            'kel_desa' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => false
            ],
            'kecamatan' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => false
            ],
            'kota_kab' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => false
            ],
            'provinsi' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true
            ],
            'kode_pos' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
                'null' => true
            ],
            'asal_sekolah' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => false
            ],
            'npsn_sekolah' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
                'null' => true
            ],
            'nisn' => [
                'type' => 'VARCHAR',
                'constraint' => 25,
                'null' => true
            ],
            'tahun_lulus' => [
                'type' => 'VARCHAR',
                'constraint' => 5,
                'null' => true
            ],
            'status_pendaftaran' => [
                'type' => 'ENUM',
                'constraint' => ['proses_pembayaran', 'verifikasi_data', 'lolos', 'tidak_lolos'],
                'null' => false
            ],
            'jurusan' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true
            ],
            'ukuran_baju' => [
                'type' => 'VARCHAR',
                'constraint' => 5,
                'null' => true
            ],
            'ukuran_peci' => [
                'type' => 'VARCHAR',
                'constraint' => 5,
                'null' => true
            ],
        ])->addPrimaryKey('id_pendaftar')
            ->createTable('pendaftar', true);
    }

    public function down()
    {
        $this->forge->dropTable('pendaftar', true);
    }
}
