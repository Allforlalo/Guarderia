<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parentezco extends Model
{
    protected $table = 'parentezcos';
    protected $primaryKey = 'id_parentezco';
    protected $fillable = ['nombre'];
}
