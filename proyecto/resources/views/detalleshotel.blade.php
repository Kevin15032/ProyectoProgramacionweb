@extends('layouts.navformularios')

@section('contenido')
<div class="container mx-auto p-4 bg-white rounded-lg shadow-lg">
  <h1 class="text-4xl font-extrabold text-center mb-6 text-gray-800 border-b pb-4">{{ $hotel->nombre }}</h1>

  <div class="flex flex-wrap lg:flex-nowrap items-center justify-between gap-6">
      
      <div class="w-full lg:w-1/2">
          <div class="space-y-4">
              <p class="text-lg">
                  <strong class="text-gray-700">Categoría:</strong> 
                  <span class="text-yellow-500">{{ $hotel->categoria }} Estrellas</span>
              </p>
              <p class="text-lg"><strong class="text-gray-700">Ciudad:</strong> <span class="text-gray-600">{{ $hotel->ciudad }}</span></p>
              <p class="text-lg"><strong class="text-gray-700">Precio por noche:</strong> <span class="text-green-600 font-bold">${{ number_format($hotel->precio, 2) }}</span></p>
              <p class="text-lg"><strong class="text-gray-700">Disponibilidad:</strong> 
                <span class="text-gray-600">
                    {{ $hotel->fecha_inicio ? date('d-m-Y', strtotime($hotel->fecha_inicio)) : 'No definida' }} 
                    - 
                    {{ $hotel->fecha_fin ? date('d-m-Y', strtotime($hotel->fecha_fin)) : 'No definida' }}
                </span>
            </p>
              <p class="text-lg"><strong class="text-gray-700">Descripción:</strong> <span class="text-gray-600">{{ $hotel->descripcion }}</span></p>
              <p class="text-lg"><strong class="text-gray-700">Políticas de cancelación:</strong> <span class="text-gray-600">{{ $hotel->politicas_cancelacion }}</span></p>
          </div>
      </div>

      <div class="w-full lg:w-1/2">
          @if($hotel->foto)
              <div class="relative overflow-hidden rounded-lg shadow-lg border border-gray-200">
                  <img src="{{ asset('storage/' . $hotel->foto) }}" alt="Foto de {{ $hotel->nombre }}" class="w-full lg:h-64 h-48 object-cover">
              </div>
          @else
              <div class="flex flex-col items-center justify-center text-gray-500 italic border border-gray-200 rounded-lg p-4">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a2 2 0 002 2h1m10-4h1a2 2 0 012 2v1M4 8V7a2 2 0 012-2h1m10 0h1a2 2 0 012 2v1M4 12h16M12 4v16" />
                  </svg>
                  No hay foto disponible.
              </div>
          @endif
      </div>
  </div>

  <div class="mt-6 flex justify-between">
      <a href="{{ route('rutaAdmiHoteles') }}" class="btn btn-secondary">
          Regresar a la lista
      </a>
      <div class="mt-6 flex flex-col items-center">
        <form action="{{ route('reservar.hotel', $hotel->id) }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="fecha_inicio" class="block text-gray-700">Fecha de inicio:</label>
                <input type="date" name="fecha_inicio" id="fecha_inicio" class="border rounded px-4 py-2 w-full" required>
            </div>
            <div class="mb-4">
                <label for="fecha_fin" class="block text-gray-700">Fecha de fin:</label>
                <input type="date" name="fecha_fin" id="fecha_fin" class="border rounded px-4 py-2 w-full" required>
            </div>
            <button type="submit" class="btn btn-primary">Reservar</button>
        </form>
    </div>
  </div>
</div>
@endsection




