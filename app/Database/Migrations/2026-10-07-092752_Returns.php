<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Returns extends Migration
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
            'order_id'              => [    //Tabel Order
                'type'      => 'INT',
                'unsigned'  => TRUE,
            ],
            'product_id'            => [    // Tabel Produk
                'type'      => 'INT',
                'unsigned'  => TRUE,
            ],
            'qty_returned'          => [
                'type'      => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'customer_complaint'    => [
                'type'  => 'TEXT',
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
        $this->forge->addForeignKey('order_id', 'orders', 'id', 'CASCADE', 'CASCADE', 'RFK_orders_id');
        $this->forge->addForeignKey('product_id', 'products', 'id', 'CASCADE', 'CASCADE', 'RFK_products_id');
        $this->forge->createTable('returns');
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->dropTable('returns');
        $this->db->enableForeignKeyChecks();
    }
}
