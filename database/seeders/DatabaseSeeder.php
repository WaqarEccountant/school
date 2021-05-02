<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name'=>'Admin User',
            'email'=>'admin@example.com',
            'role'=>'admin',
            'mobile'=>'',
            'password'=>bcrypt('Admin123')
        ]);

        User::create([
            'name'=>'Teacher User',
            'email'=>'teacher@example.com',
            'role'=>'teacher',
            'mobile'=>'',
            'password'=>bcrypt('Admin123')
        ]);
    }
}
