<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TransferItemsSeeder extends Seeder
{
    public function run()
    {
        $now = '2026-10-09 16:55:00';

        $this->db->table('transfer_items')->insertBatch([
            [
                'id' => 1, 'transfer_id' => 1, 'product_id' => 2, 'qty' => 20,
                'created_at' => $now, 'updated_at' => $now, 'created_by' => 1,
            ],
            [
                'id' => 2, 'transfer_id' => 2, 'product_id' => 3, 'qty' => 15,
                'created_at' => $now, 'updated_at' => $now, 'created_by' => 2,
            ],
        ]);
    }
}
