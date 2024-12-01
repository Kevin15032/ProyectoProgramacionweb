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

<div class="container my-5">
    <h1 class="text-center mb-4">Modificar Tarifas de Hotel</h1>
    <form action="{{ route('guardarTarifa') }}" method="POST" class="row g-3">
        @csrf
        <div class="col-12">
            <label for="hotel-select" class="form-label">Seleccionar Hotel</label>
            <select class="form-select" name="hotel" id="hotel-select" required>
                <option selected disabled>Seleccione un hotel</option>
                @foreach ($selectHoteles as $hotel)
                    <option value="{{ $hotel->id }}">{{ $hotel->nombre }}</option>
                @endforeach
            </select>
            <small class="text-danger fst-italic">{{ $errors->first('hotel') }}</small>
        </div>
        <div class="col-12">
            <label for="precio-hotel" class="form-label">Precio por Noche (€)</label>
            <input 
                type="number" 
                class="form-control" 
                name="precioHotel" 
                id="precio-hotel" 
                value="{{ old('precioHotel') }}" 
                placeholder="Ingrese el precio por noche" 
                required>
            <small class="text-danger fst-italic">{{ $errors->first('precioHotel') }}</small>
        </div>
        
        <button type="submit" class="btn btn-primary mt-3">Guardar Tarifas</button>
    </form>
</div>

@endsection

