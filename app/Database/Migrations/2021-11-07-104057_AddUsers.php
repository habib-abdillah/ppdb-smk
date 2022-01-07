<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUsers extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'user_id' => [
                'type' => 'INT',
                'constraint' => 6,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'nama_lengkap' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false
            ],
            'role' => [
                'type' => 'ENUM',
                'constraint' => ['admin', 'operator', 'pendaftar'],
                'null' => false
            ],
            'kode_pendaftar' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => true
            ],
        ])->addPrimaryKey('user_id')
            ->createTable('users', true);
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
