<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SeedWmsData extends Migration
{
    public function up()
    {
        $seeder = \Config\Database::seeder();
        $seeder->call('DatabaseSeeder');
    }

    public function down()
    {
        $this->db->transStart();

        $this->db->table('transfer_items')->whereIn('id', [1, 2])->delete();
        $this->db->table('transfers')->whereIn('id', [1, 2])->delete();
        $this->db->table('returns')->where('id', 1)->delete();
        $this->db->table('order_items')->whereIn('id', [1, 2])->delete();
        $this->db->table('orders')->whereIn('id', [1, 2])->delete();
        $this->db->table('inventory_levels')->whereIn('id', [1, 2, 3])->delete();
        $this->db->table('roasting_batches')->where('id', 1)->delete();
        $this->db->table('products')->whereIn('id', [1, 2, 3, 4])->delete();
        $this->db->table('locations')->whereIn('id', [1, 2, 3])->delete();
        $this->db->table('users')->whereIn('id', [1, 2])->delete();

        $this->db->transComplete();
    }
}
