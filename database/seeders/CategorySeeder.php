<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            ['name'=>'kategorija 1', 'slug'=>'cat-1'],
            ['name'=>'kategorija 2', 'slug'=>'cat-2'],
            ['name'=>'kategorija 3', 'slug'=>'cat-3']
        ]); // dodavanje vise redova u tabelu istovremeno
     
    }
}
