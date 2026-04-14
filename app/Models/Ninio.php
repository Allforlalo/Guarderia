<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ninio extends Model
{
    protected $table = 'ninios';
    protected $primaryKey = 'id_ninio';
    protected $fillable = ['matricula', 'fecha_i', 'id_persona', 'id_centro'];
}
