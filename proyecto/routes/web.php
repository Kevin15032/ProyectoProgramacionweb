<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVista;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\VueloController;

// Rutas principales 
Route::get('/', [ControladorVista::class, 'home'])->name('rutaInicio');

Route::get('/busqueda-hotel', [ControladorVista::class, 'busquedaHotel'])->name('rutaBusquedaHotel');
Route::get('/busqueda-vuelos', [ControladorVista::class, 'busquedaVuelos'])->name('rutaBusquedaVuelos');
Route::get('/cancelar-reserva', [ControladorVista::class, 'cancelarReserva'])->name('rutaCancelarReserva');
Route::get('/carrito-reservacion', [ControladorVista::class, 'carritoReservacion'])->name('rutaCarritoReservacion');
Route::get('/correos-automaticos', [ControladorVista::class, 'correosAutomaticos'])->name('rutaCorreosAutomaticos');
Route::get('/generacion-exportacion-reportes', [ControladorVista::class, 'generacionExportacionReportes'])->name('rutaGeneracionExportacionReportes');
//Route::get('/gestion-tarifa', [ControladorVista::class, 'gestiontarifa'])->name('rutaGestionTarifa');
Route::get('/politicas-de-cancelacion', [ControladorVista::class, 'politicasDeCancelacion'])->name('rutaPoliticasDeCancelacion');
Route::get('/recuperacion-contrasena', [ControladorVista::class, 'recuperacionContrasena'])->name('rutaRecuperacionContrasena');
Route::get('/inicio-sesion', [ControladorVista::class, 'inicioSesion'])->name('rutaInicioSesion'); 
Route::get('/registro-cliente', [ControladorVista::class, 'registroCliente'])->name('rutaRegistroCliente');

Route::get('/resultado-hotel', [ControladorVista::class, 'resultadoHotel'])->name('rutaResultadoHotel');
Route::get('/resultados-vuelos', [ControladorVista::class, 'resultadosVuelos'])->name('rutaResultadosVuelos');
Route::get('/resumen-compra', [ControladorVista::class, 'resumenCompra'])->name('rutaResumenCompra');
//Route::get('/tarifa-hotel', [ControladorVista::class, 'tarifahotel'])->name('rutaTarifaHotel');
Route::get('/datalle-hotel', [ControladorVista::class, 'detallesHotel'])->name('rutaDetallesHotel');
//
//Route::get('/gestion-tarifa', [HotelController::class, 'gestionarTarifas'])->name('rutaGestionTarifa');




// Rutas de administración de vuelos, hoteles y destino 
// Route::get('/admivuelos', [VueloController::class, 'index'])->name('rutaAdmiVuelos');
// Route::get('/admivuelos/crear', [VueloController::class, 'create'])->name('crearVueloForm');
// Route::post('/admivuelos/crear', [VueloController::class, 'store'])->name('crearVuelo');
// Route::put('/admivuelos/{id}', [VueloController::class, 'update'])->name('actualizarVuelo');
// Ruta para ver el formulario de registro de vuelo
Route::get('/admivuelo', [VueloController::class, 'create'])->name('rutaCrearVuelo');
Route::post('/admivuelo', [VueloController::class, 'store'])->name('storeVuelo');

Route::get('/vuelos', [VueloController::class, 'index'])->name('rutaVuelos');
Route::get('/vuelos/{id}', [VueloController::class, 'details'])->name('detalle.vuelo');

Route::get('/gestionar-tarifas-vuelos', [VueloController::class, 'gestionarTarifasvuelos'])->name('gestionarTarifasvuelos');
Route::put('/vuelos/{id}', [VueloController::class, 'updateRate'])->name('actualizarTarifaVuelo');
Route::get('/adminvuelos', [VueloController::class, 'create'])->name('rutaAdmiVuelos');


//Hotel
Route::get('/admihoteles', [HotelController::class, 'index'])->name('rutaAdmiHoteles'); // Mostrar lista de hoteles
Route::get('/admihoteles/crear', [HotelController::class, 'create'])->name('crearHotel'); // Formulario para crear hotel
Route::post('/admihoteles', [HotelController::class, 'store'])->name('storeHotel'); // Guardar nuevo hotel
Route::get('/admihoteles/{id}', [HotelController::class, 'details'])->name('detalles.hotel'); // Ver detalles de un hotel
Route::get('/gestionar-tarifas', [HotelController::class, 'gestionarTarifas'])->name('gestionarTarifas');
// Formulario para modificar tarifas del hotel
Route::put('/admihoteles/{id}', [HotelController::class, 'updateRate'])->name('actualizarTarifaHotel'); // Actualizar tarifas del hotel
Route::delete('/admihoteles/{id}', [HotelController::class, 'destroy'])->name('eliminarHotel'); // Eliminar hotel
Route::post('/guardar-tarifa', [HotelController::class, 'guardarTarifa'])->name('guardarTarifa');



Route::get('/admidetino', [ControladorVista::class, 'admidestino'])->name('rutaAdmiDestinos');

// Rutas post para administracion de vuelos, hoteles y destino
Route::post('/procesarhotel', [ControladorVista::class, 'enviarHotel']);
Route::post('/procesarVuelo', [ControladorVista::class, 'AgregarVuelo']);
Route::post('/procesarDestino', [ControladorVista::class, 'AgregarDestino']);

// Ruta para tarifa
Route::post('/rutaguardartarifavuelo', [ControladorVista::class, 'guardarTarifaVuelo'])->name('guardarTarifaVuelo');


// Inicio de sesión y registro
Route::post('/registro', [AuthController::class, 'registro'])->name('register');
Route::post('/inicio_sesion', [AuthController::class, 'inicio'])->name('login');
