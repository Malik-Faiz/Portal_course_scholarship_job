<?php

namespace Database\Seeders;

use App\Http\Controllers\Admin;
use App\Models\Admin as ModelsAdmin;
use App\Models\scholarship_links;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        ModelsAdmin::create([
            'Username' => 'admin',
            'Password' => Hash::make('admin'),
        ]);

        scholarship_links::create([
            'UN' => 'ABC',
            'scholarship_name' => 'NNP',
            'scholarship_link' => 'http://www.google.com',
        ]);
    }
}
