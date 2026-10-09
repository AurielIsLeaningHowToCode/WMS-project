<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LocationsSeeder extends Seeder
{
    public function run()
    {
        $now = '2026-10-09 16:55:00';

        $this->db->table('locations')->insertBatch([
            [
                'id' => 1, 'code' => 'HUB-JKT', 'name' => 'Jakarta Roastery Hub',
                'loc_type' => 'Hub', 'created_at' => $now, 'updated_at' => $now,
                'created_by' => 1,
            ],
            [
                'id' => 2, 'code' => 'SPOKE-BDG', 'name' => 'Bandung Distribution Spoke',
                'loc_type' => 'Spoke', 'created_at' => $now, 'updated_at' => $now,
                'created_by' => 1,
            ],
            [
                'id' => 3, 'code' => 'SPOKE-SBY', 'name' => 'Surabaya Distribution Spoke',
                'loc_type' => 'Spoke', 'created_at' => $now, 'updated_at' => $now,
                'created_by' => 1,
            ],
        ]);
    }
}
