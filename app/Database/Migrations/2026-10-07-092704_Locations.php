<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Locations extends Migration
{
    public function up()
    {
        $this->forge->createDatabase('wms_roastery', true);

        $this->forge->addField([
            'id'    => [
                'type'              => 'INT',
                'auto_increment'    => TRUE,
            ],

            'code'  => [
                'type'      => 'VARCHAR',
                'constrait' => '50',
            ],
            'name'  => [
                'type'      => 'VARCHAR',
                'constrait' => '100',
            ],
            'loc_type'  => [
                'type'      => 'ENUM',
                'constrait' => '"Hub", "Spoke"', //Hub = Main Building, Spoke = Branch Building
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
        $this->forge->createTable('locations');
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->dropTable('locations');
        $this->db->enableForeignKeyChecks();
    }
}
