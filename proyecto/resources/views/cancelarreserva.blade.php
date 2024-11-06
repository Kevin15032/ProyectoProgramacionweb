@extends('layouts.navformularios')
@section('contenido')
<div class="container d-flex justify-content-center mt-5">
    <div class="card w-100" style="max-width: 400px;">
      <div class="card-header text-center">
        <h5 class="card-title">Cancelación de Reservación</h5>
      </div>
      <div class="card-body">
        <form class="mb-4">
          <div class="mb-3">
            <label for="reservationNumber" class="form-label">Número de Reservación</label>
            <input type="text" id="reservationNumber" name="reservationNumber" class="form-control" placeholder="Ej. RES12345">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Correo Electrónico</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="usuario@ejemplo.com">
          </div>
          <button type="submit" class="btn btn-primary w-100">Buscar Reservación</button>
        </form>

        <div class="alert alert-danger d-none" role="alert">
          <i class="bi bi-exclamation-circle me-2"></i>No se encontró ninguna reservación con los datos proporcionados.
        </div>

        <div class="d-none">
          <h6 class="font-semibold mb-3">Detalles de la Reservación</h6>
          <p>Número: <span>RES12345</span></p>
          <p>Fecha: <span>2023-12-15</span></p>
          <p>Monto: $<span>150.00</span></p>

          <div class="alert alert-warning mt-3" role="alert">
            <h6 class="font-semibold mb-2">Políticas de Reembolso</h6>
            <ul class="list-unstyled">
              <li>Cancelación con 48 horas de anticipación: reembolso completo</li>
              <li>Cancelación con 24-48 horas de anticipación: 50% de reembolso</li>
              <li>Cancelación con menos de 24 horas: sin reembolso</li>
            </ul>
          </div>

          <button class="btn btn-danger w-100 mt-3">Confirmar Cancelación</button>
        </div>

        <div class="alert alert-success d-none mt-4" role="alert">
          <i class="bi bi-check-circle me-2"></i>Su reservación ha sido cancelada exitosamente.
        </div>
      </div>
    </div>
  </div>
@endsection