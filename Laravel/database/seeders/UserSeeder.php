<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert(
            //admin
            [
                'name' => 'admin',
                'email' => 'admin@admin',
                'password' => Hash::make('admin'),
                'roll' => 'admin',
            ],
            //vendor
            [
                'name' => 'vendor',
                'email' => 'vendor@vendor',
                'password' => Hash::make('vendor'),
                'roll' => 'vendor',
            ],
            //customer
            [
                'name' => 'customer',
                'email' => 'customer@customer',
                'password' => Hash::make('customer'),
                'roll' => 'customer',
            ],
        );
    }
}
