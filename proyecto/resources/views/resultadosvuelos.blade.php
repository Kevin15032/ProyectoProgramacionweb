@extends('layouts.navformularios')

@section('contenido')
<div class="container my-5">
    <h1 class="display-4 mb-4">Vuelos Disponibles</h1>
    <div class="row">
        @foreach($vuelos as $vuelo)
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">{{ $vuelo->numero }}</h5>
                    <p class="card-text">{{ Str::limit($vuelo->aerolinea, 100) }}</p>
                    <a href="{{ route('detalle.vuelo', $vuelo->id) }}" class="btn btn-primary">Ver detalles</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
