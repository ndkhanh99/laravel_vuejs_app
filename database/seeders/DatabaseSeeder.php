<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $this->call([
        //     NewSeeder::class,
        // ]);

        \App\Models\User::factory()->create([
            'name'=> 'bmvt',
            'email'=> 'bmvtbk@gmail.com',
            'password' => Hash::make('Bmvt@hcmut'),
            'role_id'=> 1,
        ]);

    }
}
