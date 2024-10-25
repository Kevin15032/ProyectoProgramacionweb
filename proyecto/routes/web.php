<?php

use Illuminate\Support\Facades\Route;

Route::view('/','inicio')->name('rutaInicio');
Route::view('/administracion-vuelos-hoteles-destino', 'administracionvueloshotelesdestino')->name('rutaAdministracionVuelosHotelesDestino');
Route::view('/busqueda-hotel', 'busquedahotel')->name('rutaBusquedaHotel');
Route::view('/busqueda-vuelos', 'busquedavuelos')->name('rutaBusquedaVuelos');
Route::view('/cancelar-reserva', 'cancelarreserva')->name('rutaCancelarReserva');
Route::view('/carrito-reservacion', 'carritoreservacion')->name('rutaCarritoReservacion');
Route::view('/correos-automaticos', 'correosautomaticos')->name('rutaCorreosAutomaticos');
Route::view('/generacion-exportacion-reportes', 'generacionexportacionreportes')->name('rutaGeneracionExportacionReportes');
Route::view('/gestion-tarifa', 'gestiontarifa')->name('rutaGestionTarifa');
Route::view('/politicas-de-cancelacion', 'politicasdecancelacion')->name('rutaPoliticasDeCancelacion');
Route::view('/recuperacion-contrasena', 'recuperacioncontraseña')->name('rutaRecuperacionContrasena');
Route::view('/registro-cliente', 'registrocliente')->name('rutaRegistroCliente');
Route::view('/resultado-hotel', 'resultadohotel')->name('rutaResultadoHotel');
Route::view('/resultados-vuelos', 'resultadosvuelos')->name('rutaResultadosVuelos');
Route::view('/resumen-compra', 'resumencompra')->name('rutaResumenCompra');

