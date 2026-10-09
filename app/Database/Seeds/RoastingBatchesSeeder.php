<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RoastingBatchesSeeder extends Seeder
{
    public function run()
    {
        $now = '2026-10-09 16:55:00';

        $this->db->table('roasting_batches')->insertBatch([
            [
                'id' => 1, 'batch_code' => 'RB-20261008-001', 'green_bean_id' => 1,
                'raw_weight_kg' => 60, 'roasted_weight_kg' => 48,
                'roast_date' => '2026-10-08 08:00:00', 'created_at' => $now,
                'updated_at' => $now, 'created_by' => 1,
            ],
        ]);
    }
}
