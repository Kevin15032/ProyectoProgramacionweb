<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVista extends Controller
{
    public function home()
{
    return view('inicio');
}

public function administracionVuelosHotelesDestino()
{
    return view('administracionvueloshotelesdestino');
}

public function busquedaHotel()
{
    return view('busquedahotel');
}

public function busquedaVuelos()
{
    return view('busquedavuelos');
}

public function cancelarReserva()
{
    return view('cancelarreserva');
}

public function carritoReservacion()
{
    return view('carritoreservacion');
}

public function correosAutomaticos()
{
    return view('correosautomaticos');
}

public function generacionExportacionReportes()
{
    return view('generacionexportacionreportes');
}

public function gestionTarifa()
{
    return view('gestiontarifa');
}

public function politicasDeCancelacion()
{
    return view('politicasdecancelacion');
}

public function recuperacionContrasena()
{
    return view('recuperacioncontraseña');
}

public function registroCliente()
{
    return view('registrocliente');
}

public function resultadoHotel()
{
    return view('resultadohotel');
}

public function resultadosVuelos()
{
    return view('resultadosvuelos');
}

public function resumenCompra()
{
    return view('resumencompra');
}
public function admivuelo()
{
    return view('admivuelo');
}
public function admihotel()
{
    return view('admihoteles');
}
public function admidestino()
{
    return view('admidestino');
}
public function AgregarVuelo( Request $peticion)
{
    $validacion = $peticion->validate([
        'numeroVuelo' => 'required|min:3|max:20',
        'aerolinea' => 'required|min:3|max:50',
        'ciudadOrigen' => 'required|min:3|max:50',
        'ciudadDestino' => 'required|min:3|max:50',
        'precioVuelo' => 'required|numeric|min:0'
    ]);

    $vuelo = $peticion->input('numeroVuelo');
    session()->flash('exito', 'Se guardó el vuelo: ' . $vuelo);

    return redirect()->route('rutaAdmiVuelos');
}

public function AgregarDestino(Request $peticion)
{
    $validacion = $peticion->validate([
        'nombreDestino' => 'required|min:3|max:50',
        'pais' => 'required|min:3|max:50',
        'descripcion' => 'required|min:10|max:255'
    ]);

    $destino = $peticion->input('nombreDestino');
    session()->flash('exito', 'Se guardó el destino: ' . $destino);

    return redirect()->route('rutaAdmiDestinos');
}
public function enviarHotel(Request $peticion)
{
    $validacion = $peticion->validate([
        'nombreHotel' => 'required|min:3|max:50',
        'categoria' => 'required|integer|between:1,5',
        'ciudad' => 'required|min:3|max:50',
        'precio' => 'required|numeric|min:1'
    ]);

    $hotel = $peticion->input('nombreHotel');
    session()->flash('exito', 'Se guardó el hotel: ' . $hotel);

    return redirect()->route('rutaAdmiHoteles');
}

}