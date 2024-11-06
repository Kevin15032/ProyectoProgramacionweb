<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title>Turista</title>
    <style>
        .carousel-item img {
            height: 400px;
            object-fit: cover;
        }
        .card img {
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body class="bg-light">

    <header class="bg-white shadow">
        <div class="container py-4 d-flex justify-content-between align-items-center">
            <h1 class="h3 text-primary">Turista sin Maps</h1>
            <nav>
                <button onclick="window.location.href='{{ route('rutaRegistroCliente') }}'" class="btn btn-outline-primary me-2">Registrarse</button>
                <button class="btn btn-primary">Iniciar Sesión</button>
            </nav>
        </div>
    </header>

    <main class="container my-5">
        <!-- Carousel -->
        <div id="destinosCarousel" class="carousel slide mb-4" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://cdn.pixabay.com/photo/2016/04/05/11/04/nepal-1309205_960_720.jpg" class="d-block w-100" alt="Destino 1">
                </div>
                <div class="carousel-item">
                    <img src="https://cdn.pixabay.com/photo/2019/04/26/16/49/popeye-village-4158038_960_720.jpg" class="d-block w-100" alt="Destino 2">
                </div>
                <div class="carousel-item">
                    <img src="https://cdn.pixabay.com/photo/2017/10/07/11/17/pyramid-2826194_960_720.jpg" class="d-block w-100" alt="Destino 3">
                </div>
                <div class="carousel-item">
                    <img src="https://cdn.pixabay.com/photo/2017/02/26/20/37/china-2101304_1280.jpg" class="d-block w-100" alt="Destino 4">
                </div>
                <div class="carousel-item">
                    <img src="https://cdn.pixabay.com/photo/2020/03/09/08/53/plum-village-4915007_960_720.jpg" class="d-block w-100" alt="Destino 5">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#destinosCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#destinosCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Destinos populares-->
        <section>
            <h2 class="h4 mb-4">Lugares populares</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://cdn.pixabay.com/photo/2020/01/31/07/23/tokyo-4807294_1280.jpg" class="card-img-top" alt="Destino Popular 1">
                        <div class="card-body">
                            <h5 class="card-title">Tokyo Japon</h5>
                            <p class="card-text text-muted">Vive tu romance anime en Tokyo</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://cdn.pixabay.com/photo/2019/03/30/10/40/italy-4090933_960_720.jpg" class="card-img-top" alt="Destino Popular 2">
                        <div class="card-body">
                            <h5 class="card-title">Napoles Italia</h5>
                            <p class="card-text text-muted">Prueba las mejores Pizzas en Napoles</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://cdn.pixabay.com/photo/2019/11/08/11/32/france-4611143_1280.jpg" class="card-img-top" alt="Destino Popular 3">
                        <div class="card-body">
                            <h5 class="card-title">Francia Paris</h5>
                            <p class="card-text text-muted">Ciudad del Amor</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-dark text-white py-4">
        <div class="container">
            <p class="text-center mb-0">&copy; 2024 Turista. Todos los derechos reservados.</p>
        </div>
    </footer>


</body>
</html>
