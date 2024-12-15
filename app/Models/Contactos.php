<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contactos extends Model
{
    // Indica la tabla asociada al modelo
    protected $table = 'contactos';

    // Habilita la asignación masiva para las columnas necesarias
    protected $fillable = ['id, admin_id', 'nombre', 'numero', 'parentesco'];

    protected $casts = [
        'timestamp' => 'datetime',
    ];    

    // Si la tabla no utiliza timestamps de Laravel (created_at, updated_at), añade:
    public $timestamps = false;
}
