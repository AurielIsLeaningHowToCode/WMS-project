<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TransfersSeeder extends Seeder
{
    public function run()
    {
        $now = '2026-10-09 16:55:00';

        $this->db->table('transfers')->insertBatch([
            [
                'id' => 1, 'transfer_number' => 20261009.01, 'from_location_id' => 1,
                'to_location_id' => 2, 'status' => 'Completed', 'created_at' => $now,
                'updated_at' => $now, 'created_by' => 1,
            ],
            [
                'id' => 2, 'transfer_number' => 20261009.02, 'from_location_id' => 1,
                'to_location_id' => 3, 'status' => 'In Transit', 'created_at' => $now,
                'updated_at' => $now, 'created_by' => 2,
            ],
        ]);
    }
}
