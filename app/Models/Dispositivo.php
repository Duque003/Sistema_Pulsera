<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dispositivo extends Model
{
    // Indica la tabla asociada al modelo
    protected $table = 'dispositivo';

    // Habilita la asignación masiva para las columnas necesarias
    protected $fillable = ['id, admin_id', 'nombre_dispositivo', 'id_dispositivo', 'tipo_dispositivo'];

    // Si la tabla no utiliza timestamps de Laravel (created_at, updated_at), añade:
    public $timestamps = false;
}
