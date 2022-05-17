<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculos extends Model
{
    use HasFactory;

    protected $table = 'vehiculos';
    protected $fillable = ['capacidad_m_cuadrados', 'consumo_combustible_km', 'tipo_carga', 'precio_inicial'];
    protected $guarded = 'id';
    protected $primaryKey = 'id';
    protected static $logName = 'vehiculos';
    protected static $ignoreChangedAttributes = ['created_at', 'updated_at'];
    protected static $logOnlyDirty = true;
    protected static $logFillable = true;


}
