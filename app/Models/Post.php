<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //posts
    //si no recibo el nombre de la tabla, laravel asume que es el plural del modelo
    protected $table= 'post';
}
