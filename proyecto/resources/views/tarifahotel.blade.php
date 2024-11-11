@extends('layouts.navadministracion')
@section('contenido')

@if (session('exito'))
    <script> 
        Swal.fire({
            title: "Respuesta servidor!",
            text: "{{ session('exito') }}",
            icon: "success"
        });
    </script>
@endif


<div class="tab-content" id="tarifaHotel">
    
    <div class="tab-pane fade show active" id="hoteles" role="tabpanel" aria-labelledby="hoteles-tab">
        <form action="/procesarTarifahotel" method="POST" class="row g-3">
            @csrf
            <div class="col-12">
                <label for="hotel-select" class="form-label">Seleccionar Hotel</label>
                <select class="form-select" name="hotel" id="hotel-select">
                    <option selected>Seleccione un hotel</option>
                    <option value="MAD-HILTON">Hilton Madrid</option>
                    <option value="BCN-RITZ">Ritz Barcelona</option>
                    <option value="PAR-MARRIOTT">Marriott París</option>
                    <option value="LON-SAVOY">The Savoy Londres</option>
                </select>
                <small class="text-danger fst-italic">{{ $errors->first('hotel') }}</small>
            </div>
            <div class="col-12">
                <label for="precio-hotel" class="form-label">Precio por Noche (€)</label>
                <input type="number" class="form-control" name="precioHotel" id="precio-hotel" value="{{ old('precioHotel') }}" placeholder="Ingrese el precio por noche">
                <small class="text-danger fst-italic">{{ $errors->first('precioHotel') }}</small>
            </div>
            <div class="col-12">
                <label for="promocion-hotel" class="form-label">Precio Promocional por Noche (€)</label>
                <input type="number" class="form-control" name="promocionHotel" id="promocion-hotel" value="{{ old('promocionHotel') }}" placeholder="Ingrese el precio promocional por noche">
                <small class="text-danger fst-italic">{{ $errors->first('promocionHotel') }}</small>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Guardar Tarifas de Hotel</button>
        </form>
    </div>
</div>

@endsection
