@extends('layouts.navformularios')
@section('contenido')


<div class="container my-5 p-4 bg-white shadow rounded">
  <h1 class="text-center mb-4">Buscador de Hoteles</h1>

  <form action="/buscarHoteles" method="POST">
    <div class="row g-3">
      <div class="col-md-6">
        <label for="destino" class="form-label">Destino</label>
        <select class="form-select" id="destino">
          <option selected>Selecciona tu destino</option>
          <option value="paris">París</option>
          <option value="londres">Londres</option>
          <option value="nueva-york">Nueva York</option>
          <option value="tokio">Tokio</option>
         
        </select>
      </div>

      <div class="col-md-6">
        <label class="form-label">Fechas</label>
        <div class="d-flex">
          <input type="date" class="form-control me-2" placeholder="Check-in" aria-label="Check-in">
          <input type="date" class="form-control" placeholder="Check-out" aria-label="Check-out">
        </div>
      </div>

     
      <div class="col-md-4">
        <label for="habitaciones" class="form-label">Habitaciones</label>
        <select class="form-select" id="habitaciones">
          <option selected>Selecciona</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
      </div>

      <div class="col-md-4">
        <label for="adultos" class="form-label">Adultos</label>
        <select class="form-select" id="adultos">
          <option selected>Selecciona</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
        </select>
      </div>

      <div class="col-md-4">
        <label for="ninos" class="form-label">Niños</label>
        <select class="form-select" id="ninos">
          <option selected>Selecciona</option>
          <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
        </select>
      </div>

      <div class="col-md-4">
        <label for="estrellas" class="form-label">Categoría del Hotel</label>
        <select class="form-select" id="estrellas">
          <option selected>Selecciona</option>
          <option value="1">1 estrella</option>
          <option value="2">2 estrellas</option>
          <option value="3">3 estrellas</option>
          <option value="4">4 estrellas</option>
          <option value="5">5 estrellas</option>
        </select>
      </div>
    </div>

    <div class="my-4">
      <label class="form-label">Rango de Precio ($)</label>
      <input type="range" class="form-range" min="0" max="1000">
      <div class="d-flex justify-content-between text-muted">
        <span>$0</span>
        <span>$15,000</span>
      </div>
    </div>

    <div class="my-4">
      <label class="form-label">Distancia al centro (km)</label>
      <input type="range" class="form-range" min="0" max="50">
      <div class="d-flex justify-content-between text-muted">
        <span>0 km</span>
        <span>50 km</span>
      </div>
    </div>

    <div class="my-4">
      <label class="form-label">Servicios</label>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="wifi">
        <label class="form-check-label" for="wifi">WiFi</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="piscina">
        <label class="form-check-label" for="piscina">Piscina</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="desayuno">
        <label class="form-check-label" for="desayuno">Desayuno incluido</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="estacionamiento">
        <label class="form-check-label" for="estacionamiento">Estacionamiento</label>
      </div>
    </div>

    <button type="submit" class="btn btn-primary w-100">Buscar Hoteles</button>
  </form>
</div>


@endsection