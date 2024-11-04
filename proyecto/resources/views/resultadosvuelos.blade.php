<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultados de Vuelos</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container my-5">
    <h1 class="display-4 mb-5">Resultados de Vuelos</h1>
    
    <!-- Ordenar por -->
    <div class="d-flex justify-content-end mb-4">
      <select class="custom-select w-25" id="ordenarPor">
        <option selected>Ordenar por</option>
        <option value="price">Precio</option>
        <option value="duration">Duración</option>
        <option value="departureTime">Hora de Salida</option>
      </select>
    </div>

    <!-- Tabla de Resultados de Vuelos -->
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Vuelo</th>
          <th>Aerolínea</th>
          <th>Horario</th>
          <th>Duración</th>
          <th>Precio</th>
          <th>Escalas</th>
          <th>Disponibilidad</th>
          <th>Seleccionar</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>IB2742</td>
          <td>Iberia</td>
          <td>08:00 <i class="mx-2">→</i> 10:30</td>
          <td><i class="mr-2">⏰</i> 2h 30m</td>
          <td><i class="mr-2">$</i>150</td>
          <td>Directo</td>
          <td><span class="text-success">Disponible</span></td>
          <td><button class="btn btn-outline-primary btn-sm">Seleccionar</button></td>
        </tr>
        <tr>
          <td>VY1508</td>
          <td>Vueling</td>
          <td>10:15 <i class="mx-2">→</i> 13:00</td>
          <td><i class="mr-2">⏰</i> 2h 45m</td>
          <td><i class="mr-2">$</i>120</td>
          <td>1 escala</td>
          <td><span class="text-warning">Pocos asientos</span></td>
          <td><button class="btn btn-outline-primary btn-sm">Seleccionar</button></td>
        </tr>
        <tr>
          <td>FR5253</td>
          <td>Ryanair</td>
          <td>14:30 <i class="mx-2">→</i> 16:45</td>
          <td><i class="mr-2">⏰</i> 2h 15m</td>
          <td><i class="mr-2">$</i>90</td>
          <td>Directo</td>
          <td><span class="text-danger">Agotado</span></td>
          <td><button class="btn btn-outline-secondary btn-sm" disabled>Seleccionar</button></td>
        </tr>
        <tr>
          <td>LH1806</td>
          <td>Lufthansa</td>
          <td>18:00 <i class="mx-2">→</i> 20:45</td>
          <td><i class="mr-2">⏰</i> 2h 45m</td>
          <td><i class="mr-2">$</i>180</td>
          <td>Directo</td>
          <td><span class="text-success">Disponible</span></td>
          <td><button class="btn btn-outline-primary btn-sm">Seleccionar</button></td>
        </tr>
      </tbody>
    </table>

    <!-- Botón para Añadir al Carrito -->
    <div class="d-flex justify-content-end mt-5">
      <button class="btn btn-primary">Añadir al Carrito (0)</button>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>