<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;

    protected $table = 'personal';
    protected $fillable = ['nombre', 'dpi', 'horario_disponible_inicio', 'horario_disponible_fin', 'id_tipo'];
    protected $guarded = 'id';
    protected $primaryKey = 'id';
    protected static $logName = 'personal';
    protected static $ignoreChangedAttributes = ['created_at', 'updated_at'];
    protected static $logOnlyDirty = true;
    protected static $logFillable = true;
}
