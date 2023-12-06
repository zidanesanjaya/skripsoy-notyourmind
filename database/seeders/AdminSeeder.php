<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'admin',
            'email' => 'smpm1.mlg@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('1946smpmuhasa431'),
        ]);
    }
}
