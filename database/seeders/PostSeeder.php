<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create(['title'=>'Post 1',
        'category_id'=>'1',
        'excerpt'=>'Pocetak posta 1',
        'body'=>'Ceo tekst posta 1']);

        Post::create(['title'=>'Post 2',
        'category_id'=>'1',
        'excerpt'=>'Pocetak posta 2',
        'body'=>'Ceo tekst posta 2']);

        Post::create(['title'=>'Post 3',
        'category_id'=>'2',
        'excerpt'=>'Pocetak pos[ta 3',
        'body'=>'Ceo tekst posta 3']);
    }
}
