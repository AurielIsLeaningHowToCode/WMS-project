<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class OrdersSeeder extends Seeder
{
    public function run()
    {
        $now = '2026-10-09 16:55:00';

        $this->db->table('orders')->insertBatch([
            [
                'id' => 1, 'order_number' => 'ORD-20261009-001', 'order_type' => 'B2C',
                'customer_name' => 'Dina Pratama', 'shipping_address' => 'Jl. Melati 10, Jakarta',
                'shipping_provider' => 'JNE', 'shipping_receipt' => 'JNE123456789',
                'status' => 'Completed', 'created_at' => $now, 'updated_at' => $now,
                'created_by' => 1,
            ],
            [
                'id' => 2, 'order_number' => 'ORD-20261009-002', 'order_type' => 'B2B',
                'customer_name' => 'Kopi Senja Cafe', 'shipping_address' => 'Jl. Braga 25, Bandung',
                'shipping_provider' => 'SiCepat', 'shipping_receipt' => 'SCP987654321',
                'status' => 'Packed', 'created_at' => $now, 'updated_at' => $now,
                'created_by' => 2,
            ],
        ]);
    }
}
