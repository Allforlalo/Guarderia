<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BajaNinio extends Model
{
    protected $table = 'bajas_ninios';
    protected $primaryKey = 'id_baja';
    protected $fillable = ['motivo', 'fecha', 'id_ninio'];
}
