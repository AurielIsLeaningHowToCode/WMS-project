<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        $now = '2026-10-09 16:55:00';

        $this->db->table('products')->insertBatch([
            [
                'id' => 1, 'sku' => 'GB-GAYO-001', 'name' => 'Gayo Arabica Green Bean',
                'type' => 'GreenBean', 'unit_measure' => 'kg', 'base_price' => 95000,
                'min_stock_alert' => 50, 'created_at' => $now, 'updated_at' => $now,
                'created_by' => 1,
            ],
            [
                'id' => 2, 'sku' => 'RB-ESP-250', 'name' => 'Espresso Roast 250g',
                'type' => 'RoastedBean', 'unit_measure' => 'pack', 'base_price' => 85000,
                'min_stock_alert' => 20, 'created_at' => $now, 'updated_at' => $now,
                'created_by' => 1,
            ],
            [
                'id' => 3, 'sku' => 'RB-FIL-250', 'name' => 'Filter Roast 250g',
                'type' => 'RoastedBean', 'unit_measure' => 'pack', 'base_price' => 78000,
                'min_stock_alert' => 20, 'created_at' => $now, 'updated_at' => $now,
                'created_by' => 1,
            ],
            [
                'id' => 4, 'sku' => 'EQ-GRINDER-001', 'name' => 'Commercial Coffee Grinder',
                'type' => 'Equipment', 'unit_measure' => 'unit', 'base_price' => 4500000,
                'min_stock_alert' => 2, 'created_at' => $now, 'updated_at' => $now,
                'created_by' => 1,
            ],
        ]);
    }
}
