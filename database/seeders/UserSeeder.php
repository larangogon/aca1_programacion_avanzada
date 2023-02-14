<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'email' => 'admin@example.com',
            'password' => bcrypt(123),
            'age' => 30,
            'identification_card' => '12345678910',
        ]);
    }
}
