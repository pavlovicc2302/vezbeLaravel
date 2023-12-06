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
        Post::create(['title'=>'Post 5',
        'excerpt'=>'Pocetak posta 5',
        'body'=>'Ceo tekst posta 6']);
    }
}
