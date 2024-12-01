<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HotelController extends Controller
{
    
    public function index()
    {
        $hoteles = DB::table('hoteles')->get();
        return view('resultadohotel', compact('hoteles'));
    }

    
    public function create()
    {
        return view('admihoteles');
    }

    
    public function store(Request $request)
    {
        
    $request->validate([
        'nombreHotel' => 'required|string|max:255',
        'categoria' => 'required|integer',
        'ciudad' => 'required|string|max:255',
        'precio' => 'required|numeric',
        'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
    ]);

    
    if ($request->hasFile('foto')) {
        
        $foto = $request->file('foto');
        
        $fotoPath = $foto->store('hoteles', 'public'); 
    } else {
        $fotoPath = null; 
    }

    DB::table('hoteles')->insert([
        "nombre" => $request->input('nombreHotel'),
        "categoria" => $request->input('categoria'),
        "ciudad" => $request->input('ciudad'),
        "precio" => $request->input('precio'),
        "descripcion" => $request->input('descripcion'),
        "politicas_cancelacion" => $request->input('politicas_cancelacion'),
        "foto" => $fotoPath, 
        "created_at" => Carbon::now(),
        "updated_at" => Carbon::now(),
    ]);

        session()->flash('exito', 'El hotel se registró correctamente.');
        return redirect()->route('rutaAdmiHoteles');
    }

    // Mostrar detalles del hotel
    public function details($id)
    {
        $hotel = DB::table('hoteles')->where('id', $id)->first();
        return view('detalleshotel', compact('hotel'));
    }

    // Mostrar formulario para modificar tarifas del hotel
    

    // Actualizar tarifas del hotel
    public function updateRate(Request $request, $id)
    {
        DB::table('hoteles')->where('id', $id)->update([
            'precio' => $request->input('precioHotel'),
            'updated_at' => Carbon::now(),
        ]);

        session()->flash('exito', 'Las tarifas del hotel se actualizaron correctamente.');
        return redirect()->route('rutaAdmiHoteles');
    }

    public function guardarTarifa(Request $request)
{
    
    $request->validate([
        'precioHotel' => 'required|numeric',
        'promocionHotel' => 'nullable|numeric',
        'hotel' => 'required|exists:hoteles,id', 
    ]);

    
    DB::table('hoteles')->where('id', $request->input('hotel'))->update([
        'precio' => $request->input('precioHotel'),
        'updated_at' => Carbon::now(),
    ]);

    session()->flash('exito', 'Las tarifas del hotel se actualizaron correctamente.');
    return redirect()->route('rutaAdmiHoteles');
}

public function gestionarTarifas()
{
    $selectHoteles = DB::table('hoteles')->get();
    return view('tarifahotel', compact('selectHoteles'));
}


}
