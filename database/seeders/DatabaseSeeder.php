<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //llamada a seeder de usuarios y posts usando call
        $this->call([
            UserSeeder::class,
            PostSeeder::class,
        ]);
        //php artisan db:seed - to ejecute
        //php artisan migrate:fresh --seed - para borrar y crear todo de nuevo
    }
}
