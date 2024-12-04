@extends('layouts.navformularios')
@section('contenido')
@if(session('exito'))
    <div class="alert alert-success">
        {{ session('exito') }}
    </div>
@endif

@foreach ($reservas as $reserva)
<div class="mb-4 p-4 border rounded shadow-lg">
    <div class="flex items-center">
        <div class="mr-4">
            <img src="{{ asset('storage/' . $reserva->foto) }}" alt="Foto de {{ $reserva->nombre }}" class="h-24 w-24 object-cover rounded-lg">
        </div>
        <div class="flex-1">
            <h3 class="text-lg font-bold">{{ $reserva->nombre }}</h3>
            <p>Fecha: {{ $reserva->fecha_inicio }} - {{ $reserva->fecha_fin }}</p>
            <p>Monto a pagar: ${{ number_format($reserva->monto, 2) }}</p>
            <p>Estado: <span class="{{ $reserva->estado === 'Cancelado' ? 'text-red-600' : 'text-green-600' }}">{{ $reserva->estado }}</span></p>
        </div>
        @if($reserva->estado === 'Reservado')
        <form action="{{ route('cancelar.reserva', $reserva->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas cancelar esta reserva?');">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger w-100">Cancelar Reserva</button>
      </form>
            @endif
    </div>

</div>
@endforeach

@endsection


