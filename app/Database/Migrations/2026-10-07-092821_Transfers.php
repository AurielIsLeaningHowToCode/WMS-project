<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transfers extends Migration
{
    public function up()
    {
        $this->forge->createDatabase('wms_roastery', true);

        $this->forge->addField([
            'id'    => [
                'type'              => 'INT',
                'unsigned'          => TRUE,
                'auto_increment'    => TRUE,
            ],
            
            // your main fields
            'transfer_number'   => [
                'type'      => 'DECIMAL',
                'constrait' => '10,2',
            ],
            'from_location_id'  => [    //Tabel Locations
                'type'      => 'INT',
                'unsigned'  => TRUE,
            ],
            'to_location_id'    => [    //Tabel Locations
                'type'      => 'INT',
                'unsigned'  => TRUE,
            ],
            'status'            => [
                'type'      => 'ENUM',
                'constrait' => '"In Transit", "Completed"',
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
        $this->forge->createTable('transfers');
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->dropTable('transfers');
        $this->db->enableForeignKeyChecks();
    }
}
