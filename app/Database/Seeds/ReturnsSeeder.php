<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ReturnsSeeder extends Seeder
{
    public function run()
    {
        $now = '2026-10-09 16:55:00';

        $this->db->table('returns')->insertBatch([
            [
                'id' => 1, 'order_id' => 1, 'product_id' => 2, 'qty_returned' => 1,
                'customer_complaint' => 'Package was damaged during delivery.',
                'created_at' => $now, 'updated_at' => $now, 'created_by' => 1,
            ],
        ]);
    }
}
