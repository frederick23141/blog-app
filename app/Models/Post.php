<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //posts
    //si no recibo el nombre de la tabla, laravel asume que es el plural del modelo
    //protected $table = 'posts';

    //para manejo de fechas o casteos
    protected function casts(): array
    {
        return [
            'created_at' => 'datetime:d/m/Y',
            'updated_at' => 'datetime:d/m/Y',

        ];
    }

    //para manipular atributos antes de guardar o despues de obtener
    protected function title(): Attribute
    {
        return Attribute::make(
            //antes de guardar en la base de datos
            set: function ($value) {
                return strtoupper($value);
            },
            //cuando se obtiene el valor de la base de datos
            get: function ($value) {
                return ucfirst($value);
            }
        );
    }

    //to use with route model binding and change the default id to slug
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
