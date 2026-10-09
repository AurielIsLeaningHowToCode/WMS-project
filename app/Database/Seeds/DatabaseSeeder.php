<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call('UsersSeeder');
        $this->call('LocationsSeeder');
        $this->call('ProductsSeeder');
        $this->call('RoastingBatchesSeeder');
        $this->call('InventoryLevelsSeeder');
        $this->call('OrdersSeeder');
        $this->call('OrderItemsSeeder');
        $this->call('ReturnsSeeder');
        $this->call('TransfersSeeder');
        $this->call('TransferItemsSeeder');
    }
}
