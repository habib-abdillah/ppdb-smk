<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddDetailPendaftar extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_detail' => [
                'type' => 'INT',
                'constraint' => 6,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'id_pendaftar' => [
                'type' => 'INT',
                'constraint' => 6,
                'unsigned' => true
            ],
            'nama_ibu' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => false
            ],
            'nik_ibu' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => false
            ],
            'tempat_lahir_ibu' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => false
            ],
            'tanggal_lahir_ibu' => [
                'type' => 'DATE',
                'null' => false
            ],
            'pendidikan_ibu' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => false
            ],
            'pekerjaan_ibu' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true
            ],
            'penghasilan_ibu' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true
            ],
            'no_telp_ibu' => [
                'type' => 'VARCHAR',
                'constraint' => 25,
                'null' => false
            ],
            'nama_ayah' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => false
            ],
            'nik_ayah' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => false
            ],
            'tempat_lahir_ayah' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => false
            ],
            'tanggal_lahir_ayah' => [
                'type' => 'DATE',
                'null' => false
            ],
            'pendidikan_ayah' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => false
            ],
            'pekerjaan_ayah' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => false
            ],
            'penghasilan_ayah' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => false
            ],
            'no_telp_ayah' => [
                'type' => 'VARCHAR',
                'constraint' => 25,
                'null' => false
            ],
            'nama_wali' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true
            ],
            'nik_wali' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true
            ],
            'tempat_lahir_wali' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true
            ],
            'tanggal_lahir_wali' => [
                'type' => 'DATE',
                'null' => true
            ],
            'pendidikan_wali' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true
            ],
            'pekerjaan_wali' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true
            ],
            'penghasilan_wali' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true
            ],
            'no_telp_wali' => [
                'type' => 'VARCHAR',
                'constraint' => 25,
                'null' => true
            ],
            'berkas_kk' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false
            ],
            'berkas_akte' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false
            ],
            'berkas_sertif_vaksin1' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true
            ],
            'berkas_sertif_vaksin2' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true
            ],
            'ktp_ayah' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false
            ],
            'ktp_ibu' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false
            ],
            'surat_ket_lulus' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false
            ],
            'pasfoto_anak' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false
            ],
            'pasfoto_ayah' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false
            ],
            'pasfoto_ibu' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false
            ],
            'kip' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true
            ],
            'kps' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true
            ],
            'kks' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true
            ]
        ])->addPrimaryKey('id_detail')
            ->addForeignKey('id_pendaftar', 'pendaftar', 'id_pendaftar')
            ->createTable('detail_pendaftar', true);
    }

    public function down()
    {
        $this->forge->dropTable('detail_pendaftar', true);
    }
}
