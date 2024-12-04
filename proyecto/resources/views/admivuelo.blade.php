@extends('layouts.navadministracion')
@section('contenido')


    
<div class="container mt-5">
@if (session('exito'))
    <script> 
        Swal.fire({
            title: "¡Respuesta del Servidor!",
            text: "{{ session('exito') }}",
            icon: "success"
        });
    </script>
@endif


@section('contenido')
<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-6">Registrar Vuelo</h1>
    <a href=" {{ route('gestionarVuelos') }}" class="btn btn-secondary mt-4">Ver Vuelos</a>

    <form method="POST" action="{{ route('storeVuelo') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-4">
            <label for="numeroVuelo" class="font-semibold">Número de Vuelo</label>
            <input type="text" name="numeroVuelo" id="numeroVuelo" class="form-control" placeholder="Ingrese el número del vuelo" required>
        </div>
        <div class="form-group mb-4">
            <label for="aerolinea" class="font-semibold">Aerolinea</label>
            <input type="text" name="aerolinea" id="aerolinea" class="form-control" placeholder="Ingrese la aerolínea" required>
        </div>
        <div class="form-group mb-4">
            <label for="horario" class="font-semibold">Horario</label>
            <input type="time" name="horario" id="horario" class="form-control" required>
        </div>
        <div class="form-group mb-4">
            <label for="duracion_vuelo" class="font-semibold">Duración del Vuelo (horas)</label>
            <input type="number" name="duracion_vuelo" id="duracion_vuelo" class="form-control" required>
        </div>
        <div class="form-group mb-4">
            <label for="precio" class="font-semibold">Precio</label>
            <input type="number" name="precio" id="precio" class="form-control" step="0.01" placeholder="Ingrese el precio" required>
        </div>
        <div class="form-group mb-4">
            <label for="ciudad_origen" class="font-semibold">Ciudad de Origen</label>
            <input type="text" name="ciudad_origen" id="ciudad_origen" class="form-control" placeholder="Ingrese la ciudad de origen" required>
        </div>
        <div class="form-group mb-4">
            <label for="ciudad_destino" class="font-semibold">Ciudad de Destino</label>
            <input type="text" name="ciudad_destino" id="ciudad_destino" class="form-control" placeholder="Ingrese la ciudad de destino" required>
        </div>
        <div class="form-group mb-4">
            <label for="tiene_escalas" class="font-semibold">¿Tiene Escalas?</label>
            <input type="checkbox" name="tiene_escalas" id="tiene_escalas">
        </div>
       
        <button type="submit" class="btn btn-primary w-100">Registrar Vuelo</button>
    </form>
</div>
@endsection





