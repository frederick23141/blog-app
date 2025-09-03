<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        /* $post = new Post();
        $post->title = 'Titulo e prueba automatico';
        $post->content = 'Contenido del post automatico';
        $post->categorie = 'Categoria del post automatico';
        $post->save(); */

        Post::factory(50)->create();
        
    }
}
