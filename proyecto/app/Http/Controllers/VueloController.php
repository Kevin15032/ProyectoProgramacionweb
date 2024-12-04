<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class VueloController extends Controller
{
    // Mostrar todos los vuelos disponibles
    public function index()
    {
        $vuelos = DB::table('vuelos')->get();
        return view('resultadosvuelos', compact('vuelos'));
    }

    // Mostrar el formulario para registrar un vuelo
    public function create()
    {
        return view('admivuelo');
    }

    // Almacenar un nuevo vuelo en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'numeroVuelo' => 'required|string|max:255',
            'aerolinea' => 'required|string|max:255',
            'horario' => 'required|date_format:H:i',
            'duracion_vuelo' => 'required|integer',
            'precio' => 'required|numeric',
            'ciudad_origen' => 'required|string|max:255',
            'ciudad_destino' => 'required|string|max:255',
            'tiene_escalas' => 'nullable|boolean', // Se hace nullable porque no siempre estará marcado
        ]);
    
        // Convertir el valor del checkbox a booleano
        $tieneEscalas = $request->has('tiene_escalas') ? true : false;
    
        // Insertar el vuelo en la base de datos
        DB::table('vuelos')->insert([
            'numero' => $request->input('numeroVuelo'),
            'aerolinea' => $request->input('aerolinea'),
            'horario' => $request->input('horario'),
            'duracion_vuelo' => $request->input('duracion_vuelo'),
            'precio' => $request->input('precio'),
            'ciudad_origen' => $request->input('ciudad_origen'),
            'ciudad_destino' => $request->input('ciudad_destino'),
            'tiene_escalas' => $tieneEscalas, // Usamos el valor booleano
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    
        // Mensaje de éxito
        session()->flash('exito', 'El vuelo se registró correctamente.');
        return redirect()->route('gestionarTarifasvuelos');
    }
    

    // Ver detalles de un vuelo específico
    public function details($id)
    {
        $vuelo = DB::table('vuelos')->where('id', $id)->first();
          // Verificar si el vuelo existe
       
        if (!$vuelo) {
        return redirect()->route('rutaVuelos')->with('error', 'Vuelo no encontrado');
    }
    
        return view('detallevuelo', compact('vuelo'));
    }

    // Actualizar la tarifa de un vuelo específico
    public function updateRate(Request $request, $id)
    {
        $request->validate([
            'precioVuelo' => 'required|numeric',
        ]);

        DB::table('vuelos')->where('id', $id)->update([
            'precio' => $request->input('precioVuelo'),
            'updated_at' => Carbon::now(),
        ]);

        session()->flash('exito', 'Las tarifas del vuelo se actualizaron correctamente.');
        return redirect()->route('gestionarTarifasvuelos');
    }

    // Mostrar la vista para gestionar las tarifas de todos los vuelos
    public function gestionarTarifasvuelos()
    {
        $selectVuelos = DB::table('vuelos')->get();
        return view('tarifavuelo', compact('selectVuelos'));
    }

    public function buscarVuelo(Request $request)
{
    $query = DB::table('vuelos'); // Base de la consulta

    // Filtrar por origen
    if ($request->filled('ciudad_origen')) {
        $query->where('ciudad_origen', 'like', '%' . $request->ciudad_origen . '%');
    }

    // Filtrar por destino
    if ($request->filled('ciudad_destino')) {
        $query->where('ciudad_destino', 'like', '%' . $request->ciudad_destino . '%');
    }

    // Filtrar por fechas de salida
    if ($request->filled('fecha_salida')) {
        $query->whereDate('fecha_salida', '>=', $request->fecha_salida);
    }

    // Filtrar por fechas de regreso
    if ($request->filled('fecha_regreso')) {
        $query->whereDate('fecha_regreso', '<=', $request->fecha_regreso);
    }

    // Filtrar por precio
    if ($request->filled('precio_min')) {
        $query->where('precio', '>=', $request->precio_min);
    }
    if ($request->filled('precio_max')) {
        $query->where('precio', '<=', $request->precio_max);
    }

    // Filtrar por escalas
    if ($request->filled('escalas')) {
        $query->where('tiene_escalas', $request->escalas); // 1 para con escalas, 0 para sin escalas
    }

    // Filtrar por aerolínea
    if ($request->filled('aerolinea')) {
        $query->where('aerolinea', 'like', '%' . $request->aerolinea . '%');
    }

    // Obtener los resultados
    $vuelos = $query->get();

    // Retornar vista con los resultados
    return view('resultadosvuelos', compact('vuelos'));
}

public function destroy($id)
{
    $vuelo = DB::table('vuelos')->where('id', $id)->first();

    if (!$vuelo) {
        return redirect()->route('rutaVuelos')->with('error', 'El vuelo no existe.');
    }

    DB::table('vuelos')->where('id', $id)->delete();
    session()->flash('exito', 'El vuelo ha sido eliminado correctamente.');
    return redirect()->route('rutaVuelos');
}

public function gestionarVuelos()
{
    $vuelos = DB::table('vuelos')->get(); 
    return view('vervuelos', compact('vuelos'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'numeroVuelo' => 'required|string|max:255',
        'aerolinea' => 'required|string|max:255',
        'horario' => 'required',
        'duracionVuelo' => 'required|string|max:255',
        'precioVuelo' => 'required|numeric',
        'ciudadOrigen' => 'required|string|max:255',
        'ciudadDestino' => 'required|string|max:255',
        'tieneEscalas' => 'required|string|max:255',
    ]);

    $vuelo = Vuelo::findOrFail($id);
    $vuelo->update([
        'numero' => $request->numeroVuelo,
        'aerolinea' => $request->aerolinea,
        'horario' => $request->horario,
        'duracion' => $request->duracionVuelo,
        'precio' => $request->precioVuelo,
        'ciudad_origen' => $request->ciudadOrigen,
        'ciudad_destino' => $request->ciudadDestino,
        'tiene_escalas' => $request->tieneEscalas,
    ]);

    session()->flash('exito', 'El vuelo ha sido actualizado.');
    return redirect()->route('rutaVuelos');
}


}
