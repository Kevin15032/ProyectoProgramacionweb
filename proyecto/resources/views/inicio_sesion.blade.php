<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/js/app.js'])
  <title>Inicio de Sesión</title>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
    .border-red { border-color: #dc3545; }
    .text-red { color: #dc3545; }
  </style>
</head>
<body>
    @if (session('exito'))
    <script> 
        Swal.fire({
            title: "Respuesta servidor!",
            text: "{{ session('exito') }}",
            icon: "success"
        });
    </script>
@endif
  <div class="container d-flex justify-content-center mt-5">
    <div class="card w-100" style="max-width: 350px;">
      <div class="card-header text-center">
        <h5 class="card-title">Inicio de Sesión</h5>
      </div>
      <div class="card-body">
        <form id="inicioForm" action="/inicio-sesion" method="POST" >
            @csrf
          
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" class="form-control">
            <small class="text-danger fst-italic">{{ $errors->first('email') }}</small>
            <div class="text-red small mt-1" id="emailError"></div>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" id="password" name="password" class="form-control">
            <small class="text-danger fst-italic">{{ $errors->first('password') }}</small>
            <div class="text-red small mt-1" id="passwordError"></div>
          </div>
          <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
