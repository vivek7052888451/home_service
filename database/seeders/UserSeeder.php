<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin', 
            'email' => 'admin@gmail.com',
            'phone' => '7896341206',
            'password' => bcrypt('12345678')
        ]);
       $user->assignRole('Admin');

       $user = User::create([
            'name' => 'Customer', 
            'phone' => '7897541836',
            'email' => 'customer@gmail.com',
            'password' => bcrypt('12345678')
        ]);
       $user->assignRole('Customer');

       $user = User::create([
            'name' => 'Associate', 
            'phone' => '7896041238',
            'email' => 'associate@gmail.com',
            'password' => bcrypt('12345678')
        ]);
       $user->assignRole('Associate');

    }
}
