<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TransferItems extends Migration
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
            'transfer_id'   => [  //table transfers
                'type'      => 'INT',
                'unsigned'  => TRUE,
            ],
            'product_id'   => [ //table products
                'type'      => 'INT',
                'unsigned'  => TRUE,
            ],
            'qty'           => [
                'type'      => 'INT',
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
        $this->forge->addForeignKey('transfer_id', 'transfers', 'id', 'CASCADE', 'CASCADE', 'TIFK_transfer_id');
        $this->forge->addForeignKey('product_id', 'products', 'id', 'CASCADE', 'CASCADE', 'TIFK_products_id');
        $this->forge->createTable('transfer_items');
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->dropTable('transfer_items');
        $this->db->enableForeignKeyChecks();
    }
}
