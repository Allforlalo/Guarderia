<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Familiar extends Model
{
    protected $table = 'familiares';
    protected $primaryKey = 'id_fam';
    protected $fillable = ['DNI', 'dir', 'id_persona', 'id_parentezco', 'id_ninio'];
}
