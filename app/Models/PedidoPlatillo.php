<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class PedidoPlatillo extends Model
{
    protected $connection = 'glamping';
    protected $table = 'pedidos_platillos';
    protected $primaryKey = 'id_pedido_platillo';
    public $timestamps = false;
    protected $fillable = ['nombre', 'precio', 'id_venta'];
}
