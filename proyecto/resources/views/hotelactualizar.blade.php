@extends('layouts.navadministracion')

@section('contenido')
<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-6">Editar Hotel</h1>
    

    <form method="POST" action="{{ route('actualizar.hotel', $hotel->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group mb-4">
            <label for="nombreHotel" class="font-semibold">Nombre del Hotel</label>
            <input type="text" name="nombreHotel" id="nombreHotel" class="form-control" value="{{ $hotel->nombre }}" required>
        </div>
        <div class="form-group mb-4">
            <label for="categoria" class="font-semibold">Categoría</label>
            <select name="categoria" id="categoria" class="form-control" required>
                @for ($i = 1; $i <= 5; $i++)
                <option value="{{ $i }}" {{ $hotel->categoria == $i ? 'selected' : '' }}>{{ $i }} Estrella{{ $i > 1 ? 's' : '' }}</option>
                @endfor
            </select>
        </div>
        <div class="form-group mb-4">
            <label for="ciudad" class="font-semibold">Ciudad</label>
            <input type="text" name="ciudad" id="ciudad" class="form-control" value="{{ $hotel->ciudad }}" required>
        </div>
        <div class="form-group mb-4">
            <label for="precio" class="font-semibold">Precio</label>
            <input type="number" name="precio" id="precio" class="form-control" value="{{ $hotel->precio }}" step="0.01" required>
        </div>
        <div class="form-group mb-4">
            <label for="descripcion" class="font-semibold">Descripción</label>
            <textarea name="descripcion" id="descripcion" class="form-control" required>{{ $hotel->descripcion }}</textarea>
        </div>
        <div class="form-group mb-4">
            <label for="politicas_cancelacion" class="font-semibold">Políticas de Cancelación</label>
            <textarea name="politicas_cancelacion" id="politicas_cancelacion" class="form-control" required>{{ $hotel->politicas_cancelacion }}</textarea>
        </div>

        <button type="submit" class="btn btn-success w-100">Guardar Cambios</button>
        
    </form>
</div>
@endsection
