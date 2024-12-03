@extends('layouts.navadministracion')

@section('contenido')
@if (session('exito'))
    <script> 
        Swal.fire({
            title: "¡Respuesta del Servidor!",
            text: "{{ session('exito') }}",
            icon: "success"
        });
    </script>
@endif
<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-6">Registrar Hotel</h1>
    <a href="{{ route('listarHoteles') }}" class="btn btn-secondary mt-4">Ver Hoteles</a>

    <form method="POST" action="{{ route('storeHotel') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-4">
            <label for="nombreHotel" class="font-semibold">Nombre del Hotel</label>
            <input type="text" name="nombreHotel" id="nombreHotel" class="form-control" placeholder="Ingrese el nombre del hotel" required>
        </div>
        <div class="form-group mb-4">
            <label for="categoria" class="font-semibold">Categoría (Estrellas)</label>
            <select name="categoria" id="categoria" class="form-control" required>
                <option value="1">1 Estrella</option>
                <option value="2">2 Estrellas</option>
                <option value="3">3 Estrellas</option>
                <option value="4">4 Estrellas</option>
                <option value="5">5 Estrellas</option>
            </select>
        </div>
        <div class="form-group mb-4">
            <label for="ciudad" class="font-semibold">Ciudad</label>
            <input type="text" name="ciudad" id="ciudad" class="form-control" placeholder="Ingrese la ciudad del hotel" required>
        </div>
        <div class="form-group mb-4">
            <label for="precio" class="font-semibold">Precio por noche</label>
            <input type="number" name="precio" id="precio" class="form-control" step="0.01" placeholder="Ingrese el precio por noche" required>
        </div>

        <div class="form-group mb-4">
            <label for="descripcion" class="font-semibold">Descripción</label>
            <textarea name="descripcion" id="descripcion" class="form-control" placeholder="Ingrese la descripción del hotel" required></textarea>
        </div>
        

        <div class="form-group mb-4">
            <label for="politicas_cancelacion" class="font-semibold">Políticas de Cancelación</label>
            <textarea name="politicas_cancelacion" id="politicas_cancelacion" class="form-control" placeholder="Ingrese las políticas de cancelación del hotel" required></textarea>
        </div>
        
        <div class="form-group mb-4">
            <label for="distancia" class="font-semibold">Distancia al Centro (km)</label>
            <input type="number" name="distancia" id="distancia" class="form-control" step="0.01" placeholder="Ingrese la distancia" required>
        </div>
        
        <div class="form-group mb-4">
            <label for="servicios" class="font-semibold">Servicios</label>
            <select name="servicios[]" id="servicios" class="form-control" multiple>
                <option value="WiFi">WiFi</option>
                <option value="Estacionamiento">Estacionamiento</option>
                <option value="Piscina">Piscina</option>
                <option value="Desayuno incluido">Desayuno incluido</option>
                <option value="Gimnasio">Gimnasio</option>
            </select>
        </div>
        <div class="form-group mb-4">
            <label for="fecha_inicio" class="font-semibold">Fecha de Inicio de Disponibilidad</label>
            <input type="date" name="fecha_inicio" id="fecha_inicio" class="form-control" required>
        </div>
        <div class="form-group mb-4">
            <label for="fecha_fin" class="font-semibold">Fecha de Fin de Disponibilidad</label>
            <input type="date" name="fecha_fin" id="fecha_fin" class="form-control" required>
        </div>
        <div class="form-group mb-4">
            <label for="foto" class="font-semibold">Foto del hotel</label>
            <input type="file" name="foto" id="foto" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary w-100">Registrar Hotel</button>
    </form>
    
    
</div>
@endsection


