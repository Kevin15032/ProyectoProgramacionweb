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
            'distancia' => 'required|numeric',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'servicios' => 'nullable|array',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after_or_equal:fecha_inicio',
        ]);
    
        $fotoPath = $request->hasFile('foto') 
            ? $request->file('foto')->store('hoteles', 'public') 
            : null;
    
        DB::table('hoteles')->insert([
            "nombre" => $request->input('nombreHotel'),
            "categoria" => $request->input('categoria'),
            "ciudad" => $request->input('ciudad'),
            "precio" => $request->input('precio'),
            "descripcion" => $request->input('descripcion'),
            "politicas_cancelacion" => $request->input('politicas_cancelacion'),
            "servicios" => json_encode($request->input('servicios', [])),
            "distancia_al_centro" => $request->input('distancia'),
            "foto" => $fotoPath,
            "fecha_inicio" => $request->input('fecha_inicio'),
            "fecha_fin" => $request->input('fecha_fin'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);
    
        session()->flash('exito', 'El hotel se registró correctamente.');
        return redirect()->route('crearHotel');
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

public function buscarHotel(Request $request)
{
    $query = DB::table('hoteles'); 

    
    if ($request->filled('destino')) {
        $query->where('ciudad', 'like', '%' . $request->destino . '%');
    }

    
    if ($request->filled('categoria')) {
        $query->where('categoria', $request->categoria);
    }

    
    if ($request->filled('precio_min')) {
        $query->where('precio', '>=', $request->precio_min);
    }

    
    if ($request->filled('precio_max')) {
        $query->where('precio', '<=', $request->precio_max);
    }

    if ($request->filled('servicios')) {
        $servicios = $request->input('servicios');
        $query->where(function($q) use ($servicios) {
            foreach ($servicios as $servicio) {
                $q->orWhere('servicios', 'like', '%' . $servicio . '%');
            }
        });
    }
    
    if ($request->filled('distancia_max')) {
        $query->where('distancia_al_centro', '<=', $request->distancia_max);
    }
    if ($request->filled('fecha_inicio') && $request->filled('fecha_fin')) {
        $query->where('fecha_inicio', '<=', $request->fecha_inicio)
              ->where('fecha_fin', '>=', $request->fecha_fin);
    }

    
    $hoteles = $query->get();

    
    return view('resultadohotel', compact('hoteles'));
}

public function listarHoteles()
{
    
    $hoteles = DB::table('hoteles')->get();

    
    return view('Hoteleditar', compact('hoteles'));
}

// Mostrar formulario para editar un hotel
public function edit($id)
{
    $hotel = DB::table('hoteles')->where('id', $id)->first();
    return view('hotelactualizar', compact('hotel'));
}

// Actualizar un hotel
public function update(Request $request, $id)
{
    $request->validate([
        'nombreHotel' => 'required|string|max:255',
        'categoria' => 'required|integer',
        'ciudad' => 'required|string|max:255',
        'precio' => 'required|numeric',
        'descripcion' => 'required|string',
        'politicas_cancelacion' => 'required|string',
    ]);

    DB::table('hoteles')->where('id', $id)->update([
        'nombre' => $request->input('nombreHotel'),
        'categoria' => $request->input('categoria'),
        'ciudad' => $request->input('ciudad'),
        'precio' => $request->input('precio'),
        'descripcion' => $request->input('descripcion'),
        'politicas_cancelacion' => $request->input('politicas_cancelacion'),
        'updated_at' => Carbon::now(),
    ]);

    session()->flash('exito', 'El hotel se actualizó correctamente.');
    return redirect()->route('listarHoteles');
}

// Eliminar un hotel
public function destroy($id)
{
    DB::table('hoteles')->where('id', $id)->delete();
    session()->flash('exito', 'El hotel se eliminó correctamente.');
    return redirect()->route('listarHoteles');
}

public function reservar(Request $request, $id)
{
    // Buscar el hotel
    $hotel = DB::table('hoteles')->where('id', $id)->first();
    
    if (!$hotel) {
        return redirect()->route('hotel.details', $id)->withErrors('El hotel no existe.');
    }

    // Validar que las fechas sean correctas
    $fechaInicio = Carbon::parse($request->input('fecha_inicio'));
    $fechaFin = Carbon::parse($request->input('fecha_fin'));

    if ($fechaInicio->greaterThanOrEqualTo($fechaFin)) {
        return redirect()->route('hotel.details', $id)->withErrors('La fecha de inicio debe ser antes que la fecha de fin.');
    }

    // Calcular el número de noches y el monto total
    $dias = $fechaInicio->diffInDays($fechaFin);
    $montoTotal = $hotel->precio * max($dias, 1); // Si no hay diferencia, al menos cobrar una noche

    // Guardar la reserva
    DB::table('reservas')->insert([
        'hotel_id' => $id, // Aquí estamos usando $id, no $hotelId
        'usuario_id' => auth()->id(),
        'fecha_reserva' => Carbon::now(),
        'fecha_inicio' => $fechaInicio,
        'fecha_fin' => $fechaFin,
        'monto' => $montoTotal,
        'estado' => 'Reservado',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ]);

    // Redirigir con mensaje de éxito
    return redirect()->route('carrito.reservacion')->with('exito', 'Reserva realizada con éxito.');
}
public function mostrarReservas()
{
    $reservas = DB::table('reservas')
        ->where('usuario_id', auth()->id())
        ->join('hoteles', 'reservas.hotel_id', '=', 'hoteles.id')
        ->select('reservas.*', 'hoteles.nombre', 'hoteles.foto')
        ->get();

    return view('carritoreservacion', compact('reservas'));
}


public function cancelarReserva($id)
{
    
    // Eliminar la reserva
    DB::table('reservas')->where('id', $id)->delete();

    session()->flash('exito', 'Reserva cancelada y eliminada con éxito.');
    return redirect()->route('carrito.reservacion');
}

public function verReservas()
{
    $reservas = DB::table('reservas')
        ->join('hoteles', 'reservas.hotel_id', '=', 'hoteles.id')
        ->where('usuario_id', auth()->id())
        ->select('reservas.*', 'hoteles.nombre', 'hoteles.foto')
        ->get();

    return view('carritoreservacion', compact('reservas'));
}





}
