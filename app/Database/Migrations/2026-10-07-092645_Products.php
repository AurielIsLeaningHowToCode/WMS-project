<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Products extends Migration
{
    public function up()
    {
        $this->forge->createDatabase('wms_roastery', true);

        $this->forge->addField([
            'id'                =>[
                'type'              => 'INT',
                'auto_increment'    => 'true',
            ],
            'sku'               =>[
                'type'      => 'VARCHAR',
                'constrait' => '50',
                'null'      => 'false',
            ],
            'name'              =>[
                'type'      => 'VARCHAR',
                'constrait' => '150',
            ],
            'type'              =>[
                'type'      => 'ENUM',
                'constrait' => '"GreenBean", "RoastedBean", "Equipment"',
            ],
            'unit_measure'      =>[
                'type'      => 'VARCHAR',
                'constrait' => '20',
            ],
            'base_price'        =>[
                'type'      => 'DECIMAL',
                'constrait' => '10,2',
            ],
            'min_stock_alert'   =>[
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

        $this->forge->addKey('id', TRUE); //primary key
        $this->forge->createTable('products');
    }

    public function down()
    {
        //
    }
}
