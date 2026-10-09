<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RoastingBatches extends Migration
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
            'batch_code'    => [
                'type'      => 'VARCHAR',
                'constraint' => '50',
            ],
            'green_bean_id' => [ // Tabel Products
                'type'      => 'INT',
                'unsigned'  => TRUE,
            ],
            'raw_weight_kg' => [
                'type'      => 'DECIMAL',
                'constraint' => '8,2',
            ],
            'roasted_weight_kg' => [
                'type'      => 'DECIMAL',
                'constraint' => '8,2',
            ],
            'roast_date'    => [
                'type'  => 'DATETIME',
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
        $this->forge->addForeignKey('green_bean_id', 'products', 'id', 'CASCADE', 'CASCADE', 'RBFK_products_id'); //Foreign Key
        $this->forge->createTable('roasting_batches');
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->dropTable('roasting_batches');
        $this->db->enableForeignKeyChecks();
    }
}
