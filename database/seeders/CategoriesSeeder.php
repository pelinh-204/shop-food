<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cateSeed = [];// tạo mảng rỗng 
        for($i=0;$i<10;$i++){
            $cateSeed[] = [
                'name'=>fake()->name(),
                'image'=>fake()->image(),
            ];
        }
        // DB::table('categories')->insert([
        //     'name'=>'linhtkp',
        // ]);
        DB::table('categories')->insert($cateSeed);
    }
}
