<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPersonal extends Model
{
    use HasFactory;

    protected $table = 'tipopersonal';
    protected $fillable = ['tipo'];
    protected $guarded = 'id';
    protected $primaryKey = 'id';
    protected static $logName = 'tipopersonal';
    protected static $ignoreChangedAttributes = ['created_at', 'updated_at'];
    protected static $logOnlyDirty = true;
    protected static $logFillable = true;
}
