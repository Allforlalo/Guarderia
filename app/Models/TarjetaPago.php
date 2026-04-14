<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class TarjetaPago extends Model
{
    protected $connection = 'glamping';
    protected $table = 'tarjetas_pago';
    protected $primaryKey = 'id_tarjeta';
    protected $fillable = ['nombre', 'tipo'];
}