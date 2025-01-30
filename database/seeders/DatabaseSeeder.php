<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // seeds a bunch of users

        User::factory()->create([
            'name' => 'Rod Evans',
            'email' => 'rod.evans@deeppurple.com',
            'password' => bcrypt('password'),
        ]);

        User::factory()->create([
            'name' => 'Ritchie Blackmore',
            'email' => 'ritchie.blackmore@deeppurple.com',
            'password' => bcrypt('password'),
        ]);

        User::factory()->create([
            'name' => 'john lord',
            'email' => 'john.lord@deeppurple.com',
            'password' => bcrypt('password'),
        ]);

        User::factory()->create([
            'name' => 'Roger Glover',
            'email' => 'roger.glover@deeppurple.com',
            'password' => bcrypt('password'),
        ]);

        User::factory()->create([
            'name' => 'Ian Paice',
            'email' => 'ian.paice@deeppurple.com',
            'password' => bcrypt('password'),
        ]);
    }
}
