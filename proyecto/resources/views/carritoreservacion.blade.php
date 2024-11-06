@extends('layouts.navformularios')
@section('contenido')

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
  <div class="container my-5">
    <h1 class="text-center font-weight-bold mb-5">Carrito de Reservación</h1>
    
    <div class="row">
      
      <div class="col-md-6 mb-4">
        <div class="card">
          <div class="card-header d-flex align-items-center">
            <i class="fas fa-plane mr-2"></i>
            <h5 class="mb-0">Vuelos Seleccionados</h5>
          </div>
          <div class="card-body">
            <div class="mb-3 p-3 border rounded d-flex justify-content-between align-items-center">
              <div>
                <p class="font-weight-bold mb-1">Madrid - Barcelona</p>
                <p class="text-muted mb-1">Fecha: 2023-07-15</p>
                <p class="text-muted mb-0">Precio: $100 por persona</p>
              </div>
              <button class="btn btn-danger btn-sm">
                <i class="fas fa-trash-alt"></i>
              </button>
            </div>
            <div class="mb-3 p-3 border rounded d-flex justify-content-between align-items-center">
              <div>
                <p class="font-weight-bold mb-1">Barcelona - Madrid</p>
                <p class="text-muted mb-1">Fecha: 2023-07-20</p>
                <p class="text-muted mb-0">Precio: $120 por persona</p>
              </div>
              <button class="btn btn-danger btn-sm">
                <i class="fas fa-trash-alt"></i>
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- Card para Hoteles -->
      <div class="col-md-6 mb-4">
        <div class="card">
          <div class="card-header d-flex align-items-center">
            <i class="fas fa-hotel mr-2"></i>
            <h5 class="mb-0">Hoteles Seleccionados</h5>
          </div>
          <div class="card-body">
            <div class="mb-3 p-3 border rounded d-flex justify-content-between align-items-center">
              <div>
                <p class="font-weight-bold mb-1">Hotel Barcelona</p>
                <p class="text-muted mb-1">Entrada: 2023-07-15</p>
                <p class="text-muted mb-1">Salida: 2023-07-20</p>
                <p class="text-muted mb-0">Precio: $80 por noche</p>
              </div>
              <button class="btn btn-danger btn-sm">
                <i class="fas fa-trash-alt"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Card para Número de Pasajeros y Precio Total -->
    <div class="card mt-4">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <p class="h5 mb-0">Número de pasajeros:</p>
          <div class="d-flex align-items-center">
            <button class="btn btn-outline-secondary btn-sm">-</button>
            <span class="mx-3 h4 mb-0">2</span>
            <button class="btn btn-outline-secondary btn-sm">+</button>
          </div>
        </div>
        <p class="h4 text-right font-weight-bold">
          Precio Total: $500
        </p>
      </div>
      <div class="card-footer d-flex justify-content-between">
        <button class="btn btn-outline-primary" onclick="window.location.href='{{ route('rutaCancelarReserva') }}'">
          <i class="fas fa-edit me-2"></i>Cancelar reservación
        </button>
        <button class="btn btn-primary">
          <i class="fas fa-credit-card mr-2"></i>Proceder al Pago
        </button>
      </div>
    </div>
  </div>
@endsection
