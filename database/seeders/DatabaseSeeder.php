<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Company;
use App\Models\Currencies;
use App\Models\Jobs;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory()->create();

         Company::factory()->create([
            'user_id' => 8,
            'company_name' => 'Khinny Exec'
         ]);
         Currencies::factory()->create([
            'user_id' => 8,
            'company_name' => 'Khinny Exec'
         ]);
         Jobs::factory(20)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
