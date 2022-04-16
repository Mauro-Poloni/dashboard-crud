<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    public function clientes() {
        return $this->hasMany(Clientes::class, 'id');
    }
    public function articulos() {
        return $this->hasMany(Articulo::class, 'id');
    }
}
