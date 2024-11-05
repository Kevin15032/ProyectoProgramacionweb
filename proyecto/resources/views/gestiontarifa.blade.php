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
  
   
        <div class="tab-content" id="tarifasTabContent">
          
          <!-- Formulario Vuelos -->
          <div class="tab-pane fade show active" id="vuelos" role="tabpanel" aria-labelledby="vuelos-tab">
            <form action="{{ route('guardarTarifaVuelo') }}" method="POST" class="row g-3">
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
  
          <!-- Formulario Hoteles -->
          <div class="tab-pane fade" id="hoteles" role="tabpanel" aria-labelledby="hoteles-tab">
            <form action="{{ route('guardarTarifaHotel') }}" method="POST" class="row g-3">
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
      </div>
    </div>
  </div>

  
@endsection