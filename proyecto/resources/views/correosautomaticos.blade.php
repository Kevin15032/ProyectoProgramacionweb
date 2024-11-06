@extends('layouts.navformularios')
@section('contenido')

  <div class="container my-5">
    <h1 class="text-center mb-5">Configuración de Correos Automáticos</h1>

    <!-- Tabs Navigation -->
    <ul class="nav nav-tabs" id="emailConfigTabs" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="registration-tab" data-bs-toggle="tab" data-bs-target="#registration" type="button" role="tab" aria-controls="registration" aria-selected="true">Registro</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="flightReminder-tab" data-bs-toggle="tab" data-bs-target="#flightReminder" type="button" role="tab" aria-controls="flightReminder" aria-selected="false">Vuelo</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="hotelReminder-tab" data-bs-toggle="tab" data-bs-target="#hotelReminder" type="button" role="tab" aria-controls="hotelReminder" aria-selected="false">Hotel</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="importantUpdates-tab" data-bs-toggle="tab" data-bs-target="#importantUpdates" type="button" role="tab" aria-controls="importantUpdates" aria-selected="false">Actualizaciones</button>
      </li>
    </ul>

    <!-- Tabs Content -->
    <div class="tab-content mt-4" id="emailConfigTabsContent">
      <!-- Registration Tab -->
      <div class="tab-pane fade show active" id="registration" role="tabpanel" aria-labelledby="registration-tab">
        <div class="card">
          <div class="card-header">
            <h5><i class="bi bi-envelope-fill me-2"></i> Confirmación de Registro</h5>
          </div>
          <div class="card-body">
            <div class="mb-3">
              <label for="registration-subject" class="form-label">Asunto del Correo</label>
              <input type="text" class="form-control" id="registration-subject" placeholder="Ingrese el asunto del correo">
            </div>
            <div class="mb-3">
              <label for="registration-content" class="form-label">Contenido del Correo</label>
              <textarea class="form-control" id="registration-content" rows="5" placeholder="Ingrese el contenido del correo"></textarea>
            </div>
          </div>
        </div>
      </div>

      <!-- Flight Reminder Tab -->
      <div class="tab-pane fade" id="flightReminder" role="tabpanel" aria-labelledby="flightReminder-tab">
        <div class="card">
          <div class="card-header">
            <h5><i class="bi bi-airplane-fill me-2"></i> Recordatorio de Vuelo</h5>
          </div>
          <div class="card-body">
            <div class="mb-3">
              <label for="flightReminder-subject" class="form-label">Asunto del Correo</label>
              <input type="text" class="form-control" id="flightReminder-subject" placeholder="Ingrese el asunto del correo">
            </div>
            <div class="mb-3">
              <label for="flightReminder-content" class="form-label">Contenido del Correo</label>
              <textarea class="form-control" id="flightReminder-content" rows="5" placeholder="Ingrese el contenido del correo"></textarea>
            </div>
          </div>
        </div>
      </div>

      <!-- Hotel Reminder Tab -->
      <div class="tab-pane fade" id="hotelReminder" role="tabpanel" aria-labelledby="hotelReminder-tab">
        <div class="card">
          <div class="card-header">
            <h5><i class="bi bi-building me-2"></i> Recordatorio de Hotel</h5>
          </div>
          <div class="card-body">
            <div class="mb-3">
              <label for="hotelReminder-subject" class="form-label">Asunto del Correo</label>
              <input type="text" class="form-control" id="hotelReminder-subject" placeholder="Ingrese el asunto del correo">
            </div>
            <div class="mb-3">
              <label for="hotelReminder-content" class="form-label">Contenido del Correo</label>
              <textarea class="form-control" id="hotelReminder-content" rows="5" placeholder="Ingrese el contenido del correo"></textarea>
            </div>
          </div>
        </div>
      </div>

      <!-- Important Updates Tab -->
      <div class="tab-pane fade" id="importantUpdates" role="tabpanel" aria-labelledby="importantUpdates-tab">
        <div class="card">
          <div class="card-header">
            <h5><i class="bi bi-bell-fill me-2"></i> Actualizaciones Importantes</h5>
          </div>
          <div class="card-body">
            <div class="mb-3">
              <label for="importantUpdates-subject" class="form-label">Asunto del Correo</label>
              <input type="text" class="form-control" id="importantUpdates-subject" placeholder="Ingrese el asunto del correo">
            </div>
            <div class="mb-3">
              <label for="importantUpdates-content" class="form-label">Contenido del Correo</label>
              <textarea class="form-control" id="importantUpdates-content" rows="5" placeholder="Ingrese el contenido del correo"></textarea>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Save Button -->
    <div class="mt-4 text-center">
      <button type="button" class="btn btn-primary w-100">
        <i class="bi bi-save me-2"></i> Guardar Configuraciones
      </button>
    </div>
  </div>
@endsection
