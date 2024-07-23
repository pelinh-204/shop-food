<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // cách 1 nhập trực tiếp vào databaseSeeder
        // tạo 1 bản ghi

        
        $this->call([
        CategoriesSeeder::class,
        ProductsSeeder::class,
        ]);
    }
}
