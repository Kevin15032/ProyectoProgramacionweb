@extends('layouts.navadministracion')
@section('contenido')


<div class="container my-5">
    @if (session('exito'))
      <script>
        Swal.fire({
          title: "Respuesta servidor!",
          text: "{{ session('exito') }}",
          icon: "success"
        });
      </script>
    @endif
  
   
        <div class="tab-content" id="tarifaVuelos">
          
          <!-- Formulario Vuelos -->
          <div class="tab-pane fade show active" id="vuelos" role="tabpanel" aria-labelledby="vuelos-tab">
            <form action="{{ route('guardarTarifaHotel') }}" method="POST" class="row g-3">
              @csrf
              <div class="col-12">
                <label for="vuelo-select" class="form-label">Seleccionar Vuelo</label>
                <select class="form-select" name="vuelo" id="vuelo-select">

                  <option selected>Seleccione un vuelo</option>
                  <option value="MAD-BCN">Madrid - Barcelona</option>
                  <option value="BCN-MAD">Barcelona - Madrid</option>
                  <option value="MAD-PAR">Madrid - París</option>
                  <option value="PAR-MAD">París - Madrid</option>
                </select>
                <small class="text-danger fst-italic">{{ $errors->first('vuelo-select') }}</small>
              </div>
              <div class="col-12">
                <label for="precio-vuelo" class="form-label">Precio Base (€)</label>
                <input type="number" class="form-control" name="precioVuelo" id="precio-vuelo" value="{{ old('precioVuelo') }}" placeholder="Ingrese el precio base">
                <small class="text-danger fst-italic">{{ $errors->first('precioVuelo') }}</small>
              </div>
              <div class="col-12">
                <label for="promocion-vuelo" class="form-label">Precio Promocional (€)</label>
                <input type="number" class="form-control" name="promocionVuelo" id="promocion-vuelo" value="{{ old('promocionVuelo') }}" placeholder="Ingrese el precio promocional">
                <small class="text-danger fst-italic">{{ $errors->first('promocionVuelo') }}</small>
              </div>
              <button type="submit" class="btn btn-primary mt-3">Guardar Tarifas de Vuelo</button>
            </form>

            
          </div>

  
@endsection