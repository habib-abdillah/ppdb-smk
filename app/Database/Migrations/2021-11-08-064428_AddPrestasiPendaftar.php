<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddPrestasiPendaftar extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
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
            'prestasi' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true
            ],
            'sertifikat' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true
            ]
        ])->addPrimaryKey('id')
            ->addForeignKey('id_pendaftar', 'pendaftar', 'id_pendaftar')
            ->createTable('prestasi_pendaftar', true);
    }

    public function down()
    {
        $this->forge->dropTable('prestasi_pendaftar', true);
    }
}
