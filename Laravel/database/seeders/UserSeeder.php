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
        DB::table('users')->insert(
            [ 
                //admin
                [
                    'name' => 'admin',
                    'email' => 'admin@admin',
                    'password' => Hash::make('admin'),
                    'role' => 'admin',
                    'avatar' => 'admin.png',
                ],
                //vendor
                [
                    'name' => 'vendor',
                    'email' => 'vendor@vendor',
                    'password' => Hash::make('vendor'),
                    'role' => 'vendor',
                    'avatar' => 'vendor.png',
                ],
                //customer
                [
                    'name' => 'customer',
                    'email' => 'customer@customer',
                    'password' => Hash::make('customer'),
                    'role' => 'customer',
                    'avatar' => 'customer.png',
                ],
            ]
        );
    }
}
