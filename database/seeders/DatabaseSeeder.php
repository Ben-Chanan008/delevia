<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Company;
use App\Models\Currencies;
use App\Models\Jobs;
use App\Models\Modules;
use App\Models\SubModules;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //  \App\Models\User::factory()->create();

        //  Company::factory()->create();
        //  Jobs::factory(20)->create();
        foreach(Modules::factory()->createData() as $value){
            Modules::factory()->create($value);
        }
        foreach(SubModules::factory()->createData() as $value){
            SubModules::factory()->create($value);
        }
        foreach(\App\Models\Routes::factory()->createData() as $value){
            \App\Models\Routes::factory()->create($value);
        }
        foreach(\App\Models\Roles::factory()->createData() as $value){
            \App\Models\Roles::factory()->create($value);
        }
        foreach(\App\Models\RolesAccess::factory()->createData() as $value){
            \App\Models\RolesAccess::factory()->create($value);
        }
         Currencies::factory()->create();
        //  Modules::factory()->withDefinedData('user', 'Module description for user')->create();
        //  Modules::factory()->withDefinedData('job-seeker', 'Module description for job seekers')->create();
        //  Modules::factory()->withDefinedData('job-giver', 'Module description for job givers')->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}