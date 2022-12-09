<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::factory()->create([
            'name' => 'Lucas Saliés Brum',
            'email' => 'sistematico@gmail.com',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Antonio Brum',
            'email' => 'antonio@example.com',
        ]);
        
        \App\Models\User::factory(10)->create();
    }
}
