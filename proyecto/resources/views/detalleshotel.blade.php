@extends('layouts.navformularios')

@section('contenido')
<<div class="container mx-auto p-4 bg-white rounded-lg shadow-lg">
  <h1 class="text-4xl font-extrabold text-center mb-6 text-gray-800 border-b pb-4">{{ $hotel->nombre }}</h1>

  <div class="flex flex-wrap lg:flex-nowrap items-start justify-between gap-6">
      
      <div class="w-full lg:w-1/2">
          <div class="space-y-4">
              <p class="text-lg"><strong class="text-gray-700">Categoría:</strong> <span class="text-yellow-500">{{ $hotel->categoria }} Estrellas</span></p>
              <p class="text-lg"><strong class="text-gray-700">Ciudad:</strong> <span class="text-gray-600">{{ $hotel->ciudad }}</span></p>
              <p class="text-lg"><strong class="text-gray-700">Precio por noche:</strong> <span class="text-green-600 font-bold">${{ number_format($hotel->precio, 2) }}</span></p>
              <p class="text-lg"><strong class="text-gray-700">Disponibilidad:</strong> 
                  <span class="{{ $hotel->disponibilidad ? 'text-green-500' : 'text-red-500' }}">
                      {{ $hotel->disponibilidad ? 'Disponible' : 'No disponible' }}
                  </span>
              </p>
              <p class="text-lg"><strong class="text-gray-700">Descripción:</strong> <span class="text-gray-600">{{ $hotel->descripcion }}</span></p>
              <p class="text-lg"><strong class="text-gray-700">Políticas de cancelación:</strong> <span class="text-gray-600">{{ $hotel->politicas_cancelacion }}</span></p>
          </div>
      </div>

      
      <div class="w-full lg:w-1/2">
          @if($hotel->foto)
              <div class="relative overflow-hidden rounded-lg shadow-lg border border-gray-200">
                  <img src="{{ asset('storage/' . $hotel->foto) }}" alt="Foto de {{ $hotel->nombre }}" class="w-full h-auto object-cover">
              </div>
          @else
              <p class="text-center text-gray-500 italic">No hay foto disponible.</p>
          @endif
      </div>
  </div>
</div>

@endsection


