<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Buyer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Buyer::factory()
            ->count(100)
            ->has(Address::factory()->count(3))
            ->create();
    }
}
