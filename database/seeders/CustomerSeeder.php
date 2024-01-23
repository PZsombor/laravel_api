<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::factory()
            ->count(5)
            ->hasOrders(1)
            ->create();

        Customer::factory()
            ->count(3)
            ->hasOrders(2)
            ->create();

        Customer::factory()
            ->count(1)
            ->hasOrders(3)
            ->create();
    }
}
