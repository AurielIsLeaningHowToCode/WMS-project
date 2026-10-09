<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InventoryLevelsSeeder extends Seeder
{
    public function run()
    {
        $now = '2026-10-09 16:55:00';

        $this->db->table('inventory_levels')->insertBatch([
            [
                'id' => 1, 'location_id' => 1, 'product_id' => 1,
                'batch_code' => 'RAW-GB-GAYO-01', 'qty' => 120,
                'created_at' => $now, 'updated_at' => $now, 'created_by' => 1,
            ],
            [
                'id' => 2, 'location_id' => 1, 'product_id' => 2,
                'batch_code' => 'RB-20261008-001', 'qty' => 80,
                'created_at' => $now, 'updated_at' => $now, 'created_by' => 1,
            ],
            [
                'id' => 3, 'location_id' => 2, 'product_id' => 2,
                'batch_code' => 'RB-20261008-001', 'qty' => 25,
                'created_at' => $now, 'updated_at' => $now, 'created_by' => 2,
            ],
        ]);
    }
}
