<!DOCTYPE html> 
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/js/app.js'])
  <title>Registro de Clientes</title>
  
  <style>
    .border-red { border-color: #dc3545; }
    .text-red { color: #dc3545; }
  </style>
</head>
<body>
  <div class="container d-flex justify-content-center mt-5">
    <div class="card w-100" style="max-width: 350px;">
      <div class="card-header text-center">
        <h5 class="card-title">Registro de Clientes</h5>
      </div>
      <div class="card-body">
        <form id="registroForm" action="{{ route('register') }}" method="POST">
            @csrf
          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="form-control" value="{{ old('nombre') }}">
            <small class="text-danger fst-italic">{{ $errors->first('nombre') }}</small>
          </div>
          <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" id="apellido" name="apellido" class="form-control" value="{{ old('apellido') }}">
            <small class="text-danger fst-italic">{{ $errors->first('apellido') }}</small>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}">
            <small class="text-danger fst-italic">{{ $errors->first('email') }}</small>
          </div>
          <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="tel" id="telefono" name="telefono" class="form-control" value="{{ old('telefono') }}">
            <small class="text-danger fst-italic">{{ $errors->first('telefono') }}</small>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" id="password" name="password" class="form-control">
            <div class="form-check mt-2">
              <input type="checkbox" id="showPassword" class="form-check-input" 
                     onchange="document.getElementById('password').type = this.checked ? 'text' : 'password';">
              <label for="showPassword" class="form-check-label">Mostrar contraseña</label>
            </div>
            <small class="text-danger fst-italic">{{ $errors->first('password') }}</small>
          </div>
          <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
            <small class="text-danger fst-italic">{{ $errors->first('password_confirmation') }}</small>
          </div>
          <button type="submit" class="btn btn-primary w-100">Registrarse</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>

