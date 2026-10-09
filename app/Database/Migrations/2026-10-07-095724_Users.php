<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        // $this->forge->createDatabase('wms_roastery', true);

        $this->forge->addField([
            'id'    => [
                'type'              => 'INT',
                'unsigned'          => TRUE,
                'auto_increment'    => TRUE,
            ],
            
            // your main fields
            'name'          => [
                'type'     => 'INT',
            ],
            'email'         => [
                'type'      => 'VARCHAR',
                'constraint' => '100',
            ],
            'password_hash' => [
                'type'      => 'VARCHAR',
                'constraint' => '255',
            ],
            'role'          => [
                'type'      => 'VARCHAR',
                'constraint' => '100',
            ],
            'is_active'     => [
                'type'      => 'TINYINT',
                'constraint' => '1',
            ],

            'created_at'   =>[
                'type'  => 'DATETIME',
            ],
            'updated_at'   =>[
                'type'  => 'DATETIME',
            ],
            'deleted_at'   =>[
                'type'  =>  'DATETIME',
                'null'  => TRUE
            ],
            'created_by'   =>[
                'type'  => 'INT',
            ],
            'updated_by'   =>[
                'type'  => 'INT',
                'null'  => TRUE,
            ],
            'deleted_by'   =>[
                'type'  => 'INT',
                'null' => TRUE,
            ],
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->dropTable('users');
        $this->db->enableForeignKeyChecks();
    }
}
