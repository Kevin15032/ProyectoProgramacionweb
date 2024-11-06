@extends('layouts.navformularios')
@section('contenido')
  <div class="container my-5">
    <h1 class="display-4 mb-4">Grand Hotel Luxe</h1>

    <div class="row">
      <div class="col-md-8">
        
        <div class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://cdn.pixabay.com/photo/2019/08/19/13/58/bed-4416515_1280.jpg" class="d-block w-100 rounded" alt="Hotel image 1">
            </div>
            <div class="carousel-item">
              <img src="https://cdn.pixabay.com/photo/2021/08/27/01/33/bedroom-6577523_1280.jpg" class="d-block w-100 rounded" alt="Hotel image 2">
            </div>
            <div class="carousel-item">
              <img src="https://cdn.pixabay.com/photo/2018/06/14/21/15/bedroom-3475656_1280.jpg" class="d-block w-100 rounded" alt="Hotel image 3">
            </div>
          </div>
        </div>

        
        <ul class="nav nav-tabs mt-4">
          <li class="nav-item">
            <a class="nav-link active" href="#description">Descripción</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#amenities">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#policies">Políticas</a>
          </li>
        </ul>

        
        <div class="tab-content p-4 border border-top-0 rounded-bottom">
          <div id="description">
            <p>El Grand Hotel Luxe ofrece una experiencia de alojamiento incomparable en el corazón de la ciudad. Con vistas panorámicas, habitaciones elegantemente decoradas y un servicio de primera clase, nuestro hotel es el destino perfecto para viajeros exigentes.</p>
          </div>
          <div id="amenities" class="d-none">
            <ul class="list-unstyled">
              <li>Wi-Fi gratuito de alta velocidad</li>
              <li>Piscina en la azotea</li>
              <li>Gimnasio 24/7</li>
              <li>Restaurante gourmet</li>
              <li>Servicio de habitaciones</li>
            </ul>
          </div>
          <div id="policies" class="d-none">
            <h5>Política de cancelación:</h5>
            <p>Cancelación gratuita hasta 48 horas antes de la llegada. Las cancelaciones posteriores o la no presentación conllevan un cargo equivalente a la primera noche de estancia.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card mb-4">
          <div class="card-body">
            <div class="d-flex align-items-center mb-3">
              <span class="h5 mb-0">4.8</span>
              <small class="text-muted ms-2">(245 reseñas)</small>
            </div>
            <p><i class="bi bi-geo-alt text-secondary"></i> 123 Calle Principal, Ciudad, País</p>
          </div>
        </div>

        <div class="card mb-4">
          <div class="card-body">
            <h5>Ubicación</h5>
            <img src="https://th.bing.com/th/id/R.6dbfcfe6d0e9e11e00bfaa88ebd823a4?rik=syokyMwHqB%2bMfw&riu=http%3a%2f%2ftoursmaps.com%2fwp-content%2fuploads%2f2016%2f08%2fstudio_puyrredon-buenos_aires-300x300.gif&ehk=HUN%2fbPxW7nS%2bkWbQ7l0ZYANKftrRACAF4pqGJwbUGI8%3d&risl=&pid=ImgRaw&r=0" class="img-fluid rounded" alt="Mapa de ubicación">
          </div>
        </div>

        <div class="d-grid gap-2">
          <button class="btn btn-primary btn-lg">Reservar ahora</button>
          <button class="btn btn-outline-secondary btn-lg">Agregar al carrito</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
  const tabLinks = document.querySelectorAll('.nav-link');
  const tabContents = document.querySelectorAll('.tab-content > div');

  tabLinks.forEach(tab => {
    tab.addEventListener('click', function(event) {
      event.preventDefault();
      
      
      tabLinks.forEach(link => link.classList.remove('active'));
      tabContents.forEach(content => content.classList.add('d-none'));
      
      
      tab.classList.add('active');
      
      
      const target = document.querySelector(tab.getAttribute('href'));
      if (target) {
        target.classList.remove('d-none');
      }
    });
  });
});

  </script>

@endsection