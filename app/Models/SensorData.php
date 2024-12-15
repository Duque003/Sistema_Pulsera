<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SensorData extends Model
{
    use HasFactory;

    // Indica la tabla asociada al modelo
    protected $table = 'sensor_data';

    // Habilita la asignación masiva para las columnas necesarias
    protected $fillable = ['admin_id', 'heart_rate', 'spo2', 'location', 'timestamp'];

    protected $casts = [
        'timestamp' => 'datetime',
    ];    

    // Si la tabla no utiliza timestamps de Laravel (created_at, updated_at), añade:
    public $timestamps = false;
}
