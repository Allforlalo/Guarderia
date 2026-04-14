<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Ponteglamping extends Model
{
    protected $connection = 'glamping';
    protected $table = 'ponteglamping';
    protected $primaryKey = 'glamping';
    protected $fillable = ['glamping', 'id_venta'];
}