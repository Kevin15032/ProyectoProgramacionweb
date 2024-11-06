@extends('layouts.navadministracion')
@section('contenido')

<div class="container mt-5">
  @if(session('exito'))
    <script> 
      Swal.fire({
        title: "Respuesta del servidor",
        text: "{{ session('exito') }}",
        icon: "success"
      });
    </script>
  @endif
  
  <form action="/correro" method="POST">
    @csrf
    <div class="tab-content mt-4" id="emailConfigTabsContent">
      
      <div class="tab-pane fade show active" id="registration" role="tabpanel" aria-labelledby="registration-tab">
        <div class="card">
          <div class="card-header">
            <h5><i class="bi bi-envelope-fill me-2"></i> Confirmación de Registro</h5>
          </div>
          <div class="card-body">
            <div class="mb-3">
              <label for="asunto_registro" class="form-label">Asunto del Correo</label>
              <input type="text" class="form-control" name="asunto_registro" value="{{ old('asunto_registro') }}" placeholder="Ingrese el asunto del correo">
              <small class="text-danger fst-italic">{{$errors->first('asunto_registro')}}</small>
            </div>
            <div class="mb-3">
              <label for="contenido_registro" class="form-label">Contenido del Correo</label>
              <textarea class="form-control" name="contenido_registro" rows="5" placeholder="Ingrese el contenido del correo">{{ old('contenido_registro') }}</textarea>
              <small class="text-danger fst-italic">{{$errors->first('contenido_registro')}}</small>
            </div>
          </div>
        </div>
      </div>

      
      <div class="tab-pane fade" id="flightReminder" role="tabpanel" aria-labelledby="flightReminder-tab">
        <div class="card">
          <div class="card-header">
            <h5><i class="bi bi-airplane-fill me-2"></i> Recordatorio de Vuelo</h5>
          </div>
          <div class="card-body">
            <div class="mb-3">
              <label for="asunto_vuelo" class="form-label">Asunto del Correo</label>
              <input type="text" class="form-control" name="asunto_vuelo" value="{{ old('asunto_vuelo') }}" placeholder="Ingrese el asunto del correo">
              <small class="text-danger fst-italic">{{$errors->first('asunto_vuelo')}}</small>
            </div>
            <div class="mb-3">
              <label for="contenido_vuelo" class="form-label">Contenido del Correo</label>
              <textarea class="form-control" name="contenido_vuelo" rows="5" placeholder="Ingrese el contenido del correo">{{ old('contenido_vuelo') }}</textarea>
              <small class="text-danger fst-italic">{{$errors->first('contenido_vuelo')}}</small>
            </div>
          </div>
        </div>
      </div>

      
      <div class="tab-pane fade" id="hotelReminder" role="tabpanel" aria-labelledby="hotelReminder-tab">
        <div class="card">
          <div class="card-header">
            <h5><i class="bi bi-building me-2"></i> Recordatorio de Hotel</h5>
          </div>
          <div class="card-body">
            <div class="mb-3">
              <label for="asunto_hotel" class="form-label">Asunto del Correo</label>
              <input type="text" class="form-control" name="asunto_hotel" value="{{ old('asunto_hotel') }}" placeholder="Ingrese el asunto del correo">
              <small class="text-danger fst-italic">{{$errors->first('asunto_hotel')}}</small>
            </div>
            <div class="mb-3">
              <label for="contenido_hotel" class="form-label">Contenido del Correo</label>
              <textarea class="form-control" name="contenido_hotel" rows="5" placeholder="Ingrese el contenido del correo">{{ old('contenido_hotel') }}</textarea>
              <small class="text-danger fst-italic">{{$errors->first('contenido_hotel')}}</small>
            </div>
          </div>
        </div>
      </div>
      
      <div class="tab-pane fade" id="importantUpdates" role="tabpanel" aria-labelledby="importantUpdates-tab">
        <div class="card">
          <div class="card-header">
            <h5><i class="bi bi-bell-fill me-2"></i> Actualizaciones Importantes</h5>
          </div>
          <div class="card-body">
            <div class="mb-3">
              <label for="asunto_actualizacion" class="form-label">Asunto del Correo</label>
              <input type="text" class="form-control" name="asunto_actualizacion" value="{{ old('asunto_actualizacion') }}" placeholder="Ingrese el asunto del correo">
              <small class="text-danger fst-italic">{{$errors->first('asunto_actualizacion')}}</small>
            </div>
            <div class="mb-3">
              <label for="contenido_actualizacion" class="form-label">Contenido del Correo</label>
              <textarea class="form-control" name="contenido_actualizacion" rows="5" placeholder="Ingrese el contenido del correo">{{ old('contenido_actualizacion') }}</textarea>
              <small class="text-danger fst-italic">{{$errors->first('contenido_actualizacion')}}</small>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>

    
    <div class="mt-4 text-center">
      <button type="submit" class="btn btn-primary w-100">
        <i class="bi bi-save me-2"></i> Guardar Configuraciones
      </button>
    </div>
  </form>
</div>

@endsection