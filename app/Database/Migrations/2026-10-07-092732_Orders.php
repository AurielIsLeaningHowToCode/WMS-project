<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Orders extends Migration
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
            'order_number'  => [
                'type'      => 'VARCHAR',
                'constraint' => '50',
            ],
            'order_type'  => [
                'type'      => 'ENUM',
                'constraint' => '"B2B", "B2C"',
            ],
            'customer_name'  => [
                'type'      => 'VARCHAR',
                'constraint' => '150',
            ],
            'shipping_address'  => [
                'type'  => 'TEXT',
            ],
            'shipping_provider'  => [
                'type'      => 'VARCHAR',
                'constraint' => '100',
            ],
            'shipping_receipt'  => [
                'type'      => 'VARCHAR',
                'constraint' => '100',
            ],
            'status'  => [
                'type'      => 'ENUM',
                'constraint' => ["Packed", "Shipped", "Completed"],
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
        $this->forge->createTable('orders');
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->dropTable('orders');
        $this->db->enableForeignKeyChecks();
    }
}
