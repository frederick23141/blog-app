<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         //usamos esto para crear siempre un usuario por defecto con las migraciones
        $user = new User();
        $user->name = 'Federico';
        $user->email = 'fede@gmail.com';
        $user->password = bcrypt('12345678');
        $user->save();

        //php artisan db:seed - to ejecute
        //php artisan migrate:fresh --seed - para borrar y crear todo de nuevo
    }
}
