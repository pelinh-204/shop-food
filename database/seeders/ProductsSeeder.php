<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cateID =DB::table('categories')->pluck('id')->toArray();
        $proSeeder=[];
        for($i=0;$i<10;$i++){
            $proSeeder[]=[
        'name'=>fake()->name(),
        'price'=>fake()->randomNumber(),
        'image'=>fake()->image(),
        'description'=>fake()->text(),
        'category_id'=>fake()->randomElement($cateID),
            ];
        }
        DB::table('products')->insert($proSeeder);
    }
}
