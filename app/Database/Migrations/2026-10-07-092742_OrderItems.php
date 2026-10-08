<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class OrderItems extends Migration
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
            'order_id'  => [ // Tabel Orders
                'type'      => 'INT',
                'unsigned'  => TRUE,
            ],
            'product_id'  => [
                'type'      => 'INT',
                'unsigned'  => TRUE,
            ],
            'qty'  => [
                'type'      => 'DECIMAL',
                'constrait' => '10,2',
            ],
            'price_at_sale'  => [
                'type'      => 'DECIMAL',
                'constrait' => '10,2',
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
        $this->forge->createTable('order_items');
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->dropTable('order_items');
        $this->db->enableForeignKeyChecks();
    }
}
