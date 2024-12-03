@extends('layouts.navadministracion')

@if (session('exito'))
    <script> 
        Swal.fire({
            title: "¡Actualización Exitosa!",
            text: "{{ session('exito') }}",
            icon: "success",
            confirmButtonText: "Aceptar"
        });
    </script>
@endif


@section('contenido')
<div class="container my-5">
    <h1 class="display-4 mb-4">Gestionar Tarifas de Vuelos</h1>

    <div class="row">
        @foreach($selectVuelos as $vuelo)
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $vuelo->numero }}</h5>
                        <p><strong>Aerolínea:</strong> {{ $vuelo->aerolinea }}</p>
                        <p><strong>Ciudad de Origen:</strong> {{ $vuelo->ciudad_origen }}</p>
                        <p><strong>Ciudad de Destino:</strong> {{ $vuelo->ciudad_destino }}</p>
                        <p><strong>Precio Actual:</strong> ${{ number_format($vuelo->precio, 2) }}</p>

                        <form action="{{ route('actualizarTarifaVuelo', $vuelo->id) }}" method="POST" onsubmit="return ConfirmelaActualizacion()">
                            @csrf
                            @method('PUT')

                            <div class="form-group mb-3">
                                <label for="precioVuelo">Nuevo Precio</label>
                                <input type="number" name="precioVuelo" id="precioVuelo" class="form-control" step="0.01" placeholder="Ingrese el nuevo precio" required>
                            </div>

                            <button type="submit" class="btn btn-success">Actualizar Precio</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <script> 
        function ConfirmelaActualizacion() {
            return confirm('¿Está seguro que quiere actualizar el precio?');
        }
    </script>
</div>
@endsection
