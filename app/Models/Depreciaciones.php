<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depreciaciones extends Model
{
    use HasFactory;

    protected $table = 'depreciaciones';
    protected $fillable = ['depreciacion_vehiculo', 'km_recorrido', 'id_vehiculo'];
    protected $guarded = 'id';
    protected $primaryKey = 'id';
    protected static $logName = 'depreciaciones';
    protected static $ignoreChangedAttributes = ['created_at', 'updated_at'];
    protected static $logOnlyDirty = true;
    protected static $logFillable = true;
}
