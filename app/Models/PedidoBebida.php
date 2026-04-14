<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class PedidoBebida extends Model
{
    protected $connection = 'glamping';
    protected $table = 'pedidos_bebidas';
    protected $primaryKey = 'id_pedido_bebida';
    public $timestamps = false;
    protected $fillable = ['nombre', 'precio', 'id_venta'];
}