<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $now = '2026-10-09 16:55:00';

        $this->db->table('users')->insertBatch([
            [
                'id' => 1, 'name' => 1, 'email' => 'admin@wms.test',
                'password_hash' => password_hash('password', PASSWORD_DEFAULT),
                'role' => 'admin', 'is_active' => 1, 'created_at' => $now,
                'updated_at' => $now, 'created_by' => 1,
            ],
            [
                'id' => 2, 'name' => 2, 'email' => 'warehouse@wms.test',
                'password_hash' => password_hash('password', PASSWORD_DEFAULT),
                'role' => 'warehouse', 'is_active' => 1, 'created_at' => $now,
                'updated_at' => $now, 'created_by' => 1,
            ],
        ]);
    }
}
