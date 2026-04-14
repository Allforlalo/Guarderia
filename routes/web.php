<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CentroController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ParentezcoController;
use App\Http\Controllers\IngredienteController;
use App\Http\Controllers\PlatoController;
use App\Http\Controllers\NinioController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AlergiaController;
use App\Http\Controllers\FamiliarController;
use App\Http\Controllers\AbonoController;
use App\Http\Controllers\RegistroComidaController;
use App\Http\Controllers\RegistroCuentaController;
use App\Http\Controllers\BajaNinioController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('centros', CentroController::class);
Route::resource('personas', PersonaController::class);
Route::resource('parentezcos', ParentezcoController::class);
Route::resource('ingredientes', IngredienteController::class);
Route::resource('platos', PlatoController::class);
Route::resource('ninios', NinioController::class);
Route::resource('menus', MenuController::class);
Route::resource('alergias', AlergiaController::class);
Route::resource('familiares', FamiliarController::class);
Route::resource('abonos', AbonoController::class);
Route::resource('registro_comidas', RegistroComidaController::class);
Route::resource('registro_cuentas', RegistroCuentaController::class);
Route::resource('BajasNinios', BajaNinioController::class);

use App\Http\Controllers\CargoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\InstalacionController;
use App\Http\Controllers\PedidoBebidaController;
use App\Http\Controllers\PedidoPlatilloController;
use App\Http\Controllers\TarjetaPagoController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\PonteglampingController;

Route::resource('cargos', CargoController::class);
Route::resource('clientes', ClienteController::class);
Route::resource('empleados', EmpleadoController::class);
Route::resource('horarios', HorarioController::class);
Route::resource('instalaciones', InstalacionController::class);
Route::resource('pedidos_bebidas', PedidoBebidaController::class);
Route::resource('pedidos_platillos', PedidoPlatilloController::class);
Route::resource('tarjetas_pago', TarjetaPagoController::class);
Route::resource('ventas', VentaController::class);
Route::resource('ponteglamping', PonteglampingController::class);

Route::get('/glamping', function () {
    $platillos = \App\Models\PedidoPlatillo::all();
    return view('glamping.inicio', compact('platillos'));
});
Route::get('/glamping/menu', [PedidoPlatilloController::class, 'menuPublico'])->name('glamping.menu');
Route::get('/glamping/instalaciones', [InstalacionController::class, 'instalacionesPublicas'])->name('glamping.instalaciones');
Route::get('/glamping/pago', function () {
    $tarjetas = \App\Models\TarjetaPago::all();
    return view('glamping.pago', compact('tarjetas'));
})->name('glamping.pago');