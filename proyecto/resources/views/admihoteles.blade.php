@extends('layouts.navadministracion')

@section('contenido')
<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-6">Registrar Hotel</h1>
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
            <label for="foto" class="font-semibold">Foto del hotel</label>
            <input type="file" name="foto" id="foto" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary w-100">Registrar Hotel</button>
    </form>
    
    
</div>
@endsection


