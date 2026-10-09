<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class OrderItemsSeeder extends Seeder
{
    public function run()
    {
        $now = '2026-10-09 16:55:00';

        $this->db->table('order_items')->insertBatch([
            [
                'id' => 1, 'order_id' => 1, 'product_id' => 2, 'qty' => 2,
                'price_at_sale' => 85000, 'created_at' => $now, 'updated_at' => $now,
                'created_by' => 1,
            ],
            [
                'id' => 2, 'order_id' => 2, 'product_id' => 3, 'qty' => 12,
                'price_at_sale' => 75000, 'created_at' => $now, 'updated_at' => $now,
                'created_by' => 2,
            ],
        ]);
    }
}
