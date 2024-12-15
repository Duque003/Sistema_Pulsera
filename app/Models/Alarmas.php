<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alarmas extends Model
{
    // Indica la tabla asociada al modelo
    protected $table = 'alarmas';

    // Habilita la asignación masiva para las columnas necesarias
    protected $fillable = ['admin_id', 'problema', 'timestamp', 'ubicacion', 'created_at'];

    protected $casts = [
        'timestamp' => 'datetime',
    ];    

    // Si la tabla no utiliza timestamps de Laravel (created_at, updated_at), añade:
    public $timestamps = false;
}
