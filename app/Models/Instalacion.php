<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Instalacion extends Model
{
    protected $connection = 'glamping';
    protected $table = 'instalaciones';
    protected $primaryKey = 'id_instalacion';
    public $timestamps = false;
    protected $fillable = ['nombre'];
}