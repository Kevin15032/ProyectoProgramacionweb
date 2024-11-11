<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVista;
// rutas principales 
Route::get('/', [ControladorVista::class, 'home'])->name('rutaInicio');
Route::get('/administracion-vuelos-hoteles-destino', [ControladorVista::class, 'administracionVuelosHotelesDestino'])->name('rutaAdministracionVuelosHotelesDestino');
Route::get('/busqueda-hotel', [ControladorVista::class, 'busquedaHotel'])->name('rutaBusquedaHotel');
Route::get('/busqueda-vuelos', [ControladorVista::class, 'busquedaVuelos'])->name('rutaBusquedaVuelos');
Route::get('/cancelar-reserva', [ControladorVista::class, 'cancelarReserva'])->name('rutaCancelarReserva');
Route::get('/carrito-reservacion', [ControladorVista::class, 'carritoReservacion'])->name('rutaCarritoReservacion');
Route::get('/correos-automaticos', [ControladorVista::class, 'correosAutomaticos'])->name('rutaCorreosAutomaticos');
Route::get('/generacion-exportacion-reportes', [ControladorVista::class, 'generacionExportacionReportes'])->name('rutaGeneracionExportacionReportes');
//ruta tarifa vuelo
Route::get('/gestion-tarifa', [ControladorVista::class, 'gestiontarifa'])->name('rutaGestionTarifa');
Route::get('/politicas-de-cancelacion', [ControladorVista::class, 'politicasDeCancelacion'])->name('rutaPoliticasDeCancelacion');
Route::get('/recuperacion-contrasena', [ControladorVista::class, 'recuperacionContrasena'])->name('rutaRecuperacionContrasena');
Route::get('/inicio-sesion', [ControladorVista::class, 'inicioSesion'])->name('rutaInicioSesion'); 
Route::get('/registro-cliente', [ControladorVista::class, 'registroCliente'])->name('rutaRegistroCliente');
Route::get('/resultado-hotel', [ControladorVista::class, 'resultadoHotel'])->name('rutaResultadoHotel');
Route::get('/resultados-vuelos', [ControladorVista::class, 'resultadosVuelos'])->name('rutaResultadosVuelos');
Route::get('/resumen-compra', [ControladorVista::class, 'resumenCompra'])->name('rutaResumenCompra');
//ruta tarifa hotel
Route::get('/tarifa-hotel',  [ControladorVista::class, 'tarifahotel'])->name('rutaTarifaHotel');
Route::get('/datalle-hotel',  [ControladorVista::class, 'detallesHotel'])->name('rutaDetallesHotel');

// rutas de administración de vuelos, hoteles y destino 
Route::get('/admivuelos', [ControladorVista::class, 'admivuelo'])->name('rutaAdmiVuelos');
Route::get('/admihoteles', [ControladorVista::class, 'admihotel'])->name('rutaAdmiHoteles');
Route::get('/admidetino', [ControladorVista::class, 'admidestino'])->name('rutaAdmiDestinos');

// rutas post para administracion de vuelos, hoteles y destino

Route::post('/procesarhotel', [ControladorVista::class, 'enviarHotel']);
Route::post('/procesarVuelo', [ControladorVista::class, 'AgregarVuelo']);
Route::post('/procesarDestino', [ControladorVista::class, 'AgregarDestino']);

// ruta para tarifa
Route::post('/rutaguardartarifavuelo', [ControladorVista::class, 'guardarTarifaVuelo'])->name('guardarTarifaVuelo');
Route::post('/procesarTarifahotel', [ControladorVista::class, 'guardarTarifaHotel'])->name('guardarTarifaHotel');

// registro
Route::post('/registro', [ControladorVista::class, 'registro']);
// inicio de sesion
Route::post('/inicio_sesion', [ControladorVista::class, 'inicio']);

Route::post('/correro',[ControladorVista::class,'correo']);