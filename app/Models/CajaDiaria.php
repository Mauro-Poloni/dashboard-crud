<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CajaDiaria extends Model
{
    use HasFactory;

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'fecha' => 'required',
        'saldo' => 'required|integer',
        'cliente_fiado' => 'nullable',
        'cantidad_fiado' => 'nullable',
        'fecha_cancelacio_fiado' => 'nullable',
        'saldo_fiado' => 'nullable'
    ];
}
