@extends('layouts.navformularios')

@section('contenido')
<div class="container my-5">
    <h1 class="display-4 mb-4">Hoteles Disponibles</h1>
    <div class="row">
        @foreach($hoteles as $hotel)
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">{{ $hotel->nombre }}</h5>
                    <p class="card-text">
                        {{ Str::limit($hotel->descripcion, 100) }}
                    </p>
                    <a href="{{ route('detalles.hotel', $hotel->id) }}" class="btn btn-primary">Ver detalles</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
