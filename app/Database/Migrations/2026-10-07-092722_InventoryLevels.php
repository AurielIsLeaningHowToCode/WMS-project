<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class InventoryLevels extends Migration
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
            'location_id'   => [ // Tabel Locations
                'type'      => 'INT',
                'unsigned'  => TRUE,
            ],
            'product_id'   => [  // Tabel Products
                'type'      => 'INT',
                'unsigned'  => TRUE,
            ],
            'batch_code'    => [
                'type'      => 'VARCHAR',
                'constraint' => '50',
            ],
            'qty'    => [
                'type'      => 'DECIMAL',
                'constraint' => '10,2',
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
        $this->forge->addForeignKey('location_id', 'locations', 'id', 'CASCADE', 'CASCADE', 'ILFK_locations_id'); //Foreign Key
        $this->forge->addForeignKey('product_id', 'products', 'id', 'CASCADE', 'CASCADE', 'ILFK_products_id'); //Foreign Key
        $this->forge->createTable('inventory_levels');
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->dropTable('inventory_levels');
        $this->db->enableForeignKeyChecks();
    }
}
