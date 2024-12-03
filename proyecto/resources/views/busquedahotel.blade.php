@extends('layouts.navformularios')
@section('contenido')


<div class="container my-5 p-4 bg-white shadow rounded">
  <h1 class="text-center mb-4">Buscador de Hoteles</h1>

  <form method="GET" action="{{ route('buscarHotel') }}" class="mb-4">
    <div class="form-row">
        <div class="col-md-3 mb-2">
            <input type="text" name="ciudad" class="form-control" placeholder="Destino (Ciudad)" value="{{ request('ciudad') }}">
        </div>
        <div class="col-md-2 mb-2">
            <input type="number" name="categoria" class="form-control" placeholder="Estrellas" value="{{ request('categoria') }}">
        </div>
        <div class="col-md-2 mb-2">
            <input type="number" name="precio_min" class="form-control" placeholder="Precio mínimo" value="{{ request('precio_min') }}">
        </div>
        <div class="col-md-2 mb-2">
            <input type="number" name="precio_max" class="form-control" placeholder="Precio máximo" value="{{ request('precio_max') }}">
        </div>
        <div class="col-md-3 mb-2">
            <button type="submit" class="btn btn-primary w-100">Buscar</button>
        </div>
    </div>
</form>

</div>


@endsection