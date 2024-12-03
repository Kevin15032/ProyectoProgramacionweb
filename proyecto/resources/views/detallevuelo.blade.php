@extends('layouts.navadministracion')

@section('contenido')
<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-6">Detalles del Vuelo</h1>
    <div class="card">
        <div class="card-body">
            <p><strong>Número de Vuelo:</strong> {{ $vuelo->numero }}</p>
            <p><strong>Aerolínea:</strong> {{ $vuelo->aerolinea }}</p>
            <p><strong>Horario:</strong> {{ $vuelo->horario }}</p>
            <p><strong>Duración del Vuelo:</strong> {{ $vuelo->duracion_vuelo }} horas</p>
            <p><strong>Precio:</strong> ${{ number_format($vuelo->precio, 2) }}</p>
            <p><strong>Ciudad de Origen:</strong> {{ $vuelo->ciudad_origen }}</p>
            <p><strong>Ciudad de Destino:</strong> {{ $vuelo->ciudad_destino }}</p>
            <p><strong>Tiene Escalas:</strong> {{ $vuelo->tiene_escalas ? 'Sí' : 'No' }}</p>
        </div>
    </div>

    <div class="mt-4">
        <a href="" class="btn btn-success">Reservar</a>
    </div>
</div>
@endsection
