<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Abono extends Model
{
    protected $table = 'abonos';
    protected $primaryKey = 'id_abono';
    protected $fillable = ['cantidad', 'fecha', 'id_regcuenta'];
}
