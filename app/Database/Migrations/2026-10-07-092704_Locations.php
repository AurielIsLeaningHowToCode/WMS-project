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
                'auto_increment'    => 'true',
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
                'null'  => 'true'
            ],
            'created_by'   =>[
                'type'  => 'INT',
            ],
            'updated_by'   =>[
                'type'  => 'INT',
                'null'  => 'true',
            ],
            'deleted_by'   =>[
                'type'  => 'INT',
                'null' => 'true',
            ],
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('locations');
    }

    public function down()
    {
        //
    }
}
