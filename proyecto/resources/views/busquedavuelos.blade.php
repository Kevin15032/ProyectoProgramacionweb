@extends('layouts.navformularios')
@section('contenido')
@if (session('exito'))
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Swal.fire({
            title: "Respuesta servidor!",
            text: "{{ session('exito') }}",
            icon: "success"
        });
    </script>
  @endif

<div class="container mt-5">
        <h1 class="mb-4">Buscar Vuelos</h1>
        <form action="" method="">
            @csrf
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="origin">Origen</label>
                    <select class="form-control" id="origin" name="origin" required>
                        <option selected disabled>Seleccionar origen</option>
                        <option value="MEX">Ciudad de México (MEX)</option>
                        <option value="GDL">Guadalajara (GDL)</option>
                        <option value="MTY">Monterrey (MTY)</option>
                        
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="destination">Destino</label>
                    <select class="form-control" id="destination" name="destination" required>
                        <option selected disabled>Seleccionar destino</option>
                        <option value="CUN">Cancún (CUN)</option>
                        <option value="LAX">Los Ángeles (LAX)</option>
                        <option value="NYC">Nueva York (NYC)</option>
                       
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="departureDate">Fecha de salida</label>
                    <input type="date" class="form-control" id="departureDate" name="departureDate" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="returnDate">Fecha de regreso</label>
                    <input type="date" class="form-control" id="returnDate" name="returnDate">
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="airline">Aerolínea</label>
                    <select class="form-control" id="airline" name="airline" required>
                        <option selected disabled>Seleccionar aerolínea</option>
                        <option value="AEROMEXICO">Aeroméxico</option>
                        <option value="VOLARIS">Volaris</option>
                        <option value="VIVAAEROBUS">VivaAerobus</option>
                       
                    </select>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="adults">Adultos</label>
                    <select class="form-control" id="adults" name="adults" required>
                        <option selected disabled>Seleccionar</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="children">Niños</label>
                    <select class="form-control" id="children" name="children">
                        <option selected disabled>Seleccionar</option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="class">Clase</label>
                    <select class="form-control" id="class" name="class" required>
                        <option selected disabled>Seleccionar clase</option>
                        <option value="economy">Económica</option>
                        <option value="business">Ejecutiva</option>
                        <option value="first">Primera Clase</option>
                    </select>
                </div>
            </div>

            <button onclick="window.location.href='{{route('rutaResultadosVuelos')}}'" class="btn btn-primary w-100" type="submit">Buscar Vuelos</button>
        </form>
    </div>
  @endsection