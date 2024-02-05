<?php

namespace Database\Seeders;

use AdminRoleTable;
use AdminTable;
use Database\Seeders\AdminRoleTable as SeedersAdminRoleTable;
use Database\Seeders\AdminTable as SeedersAdminTable;
use Database\Seeders\SellerTableSeeder as SeedersSellerTableSeeder;
use Illuminate\Database\Seeder;
use SellerTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            SeedersAdminRoleTable::class,
            SeedersAdminTable::class,
            SeedersSellerTableSeeder::class
        ]);
    }
}
