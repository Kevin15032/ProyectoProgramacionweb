@extends('layouts.navformularios')
@section('contenido')


<div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-6 text-center">Resultados de Hoteles</h1>
        <div class="row">
           
            <div class="col-md-4 mb-4">
                <div class="card overflow-hidden">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/05/2e/b9/1a/gran-hotel-ciudad-de.jpg?w=1200&h=-1&s=1" alt="Gran Hotel Ciudad" class="card-img-top" />
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-start">
                            <span>Gran Hotel Ciudad</span>
                            <span class="badge badge-secondary ml-2">4 <i class="fas fa-star"></i></span>
                        </div>
                        <div class="text-muted d-flex align-items-center">
                            <i class="fas fa-map-marker-alt mr-1"></i>
                            Centro Histórico, Ciudad
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-star text-warning h5"></i>
                                <span class="ml-1 font-weight-bold">4.5</span>
                            </div>
                            <div class="text-muted">
                                <i class="fas fa-users mr-1"></i>
                                5 habitaciones disponibles
                            </div>
                        </div>
                        <p class="text-2xl font-weight-bold text-success">
                            €120 <span class="text-sm font-weight-normal text-muted">/ noche</span>
                        </p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary w-100" disabled>Añadir al carrito</button>
                    </div>
                </div>
            </div>

            
            <div class="col-md-4 mb-4">
                <div class="card overflow-hidden">
                    <img src="https://grand-paradise-playa-dorada.hoteles-en-islas-del-caribe.com/data/Images/OriginalPhoto/4943/494302/494302035/image-puerto-plata-grand-paradise-playa-dorada-hotel-52.JPEG" alt="Resort Playa Dorada" class="card-img-top" />
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-start">
                            <span>Resort Playa Dorada</span>
                            <span class="badge badge-secondary ml-2">5 <i class="fas fa-star"></i></span>
                        </div>
                        <div class="text-muted d-flex align-items-center">
                            <i class="fas fa-map-marker-alt mr-1"></i>
                            Costa del Sol, Playa
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-star text-warning h5"></i>
                                <span class="ml-1 font-weight-bold">4.8</span>
                            </div>
                            <div class="text-muted">
                                <i class="fas fa-users mr-1"></i>
                                2 habitaciones disponibles
                            </div>
                        </div>
                        <p class="text-2xl font-weight-bold text-success">
                            €250 <span class="text-sm font-weight-normal text-muted">/ noche</span>
                        </p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary w-100" disabled>Añadir al carrito</button>
                    </div>
                </div>
            </div>

           
            <div class="col-md-4 mb-4">
                <div class="card overflow-hidden">
                    <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/532598756.jpg?k=e11de3722901e86ce930f591c0181fe1dcc1aab6f18db80179e7b7e133b5840f&o=&hp=1" alt="Hostal El Viajero" class="card-img-top" />
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-start">
                            <span>Hostal El Viajero</span>
                            <span class="badge badge-secondary ml-2">3 <i class="fas fa-star"></i></span>
                        </div>
                        <div class="text-muted d-flex align-items-center">
                            <i class="fas fa-map-marker-alt mr-1"></i>
                            Barrio Bohemio, Ciudad
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-star text-warning h5"></i>
                                <span class="ml-1 font-weight-bold">4.2</span>
                            </div>
                            <div class="text-muted">
                                <i class="fas fa-users mr-1"></i>
                                8 habitaciones disponibles
                            </div>
                        </div>
                        <p class="text-2xl font-weight-bold text-success">
                            €60 <span class="text-sm font-weight-normal text-muted">/ noche</span>
                        </p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary w-100" disabled>Añadir al carrito</button>
                    </div>
                </div>
            </div>

           
            <div class="col-md-4 mb-4">
                <div class="card overflow-hidden">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRt5K6sJwWPIutrUuDs_nsh1a5fvIxNa4hSJQ&s" alt="Hotel Montaña Verde" class="card-img-top" />
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-start">
                            <span>Hotel Montaña Verde</span>
                            <span class="badge badge-secondary ml-2">4 <i class="fas fa-star"></i></span>
                        </div>
                        <div class="text-muted d-flex align-items-center">
                            <i class="fas fa-map-marker-alt mr-1"></i>
                            Sierra Nevada, Montaña
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-star text-warning h5"></i>
                                <span class="ml-1 font-weight-bold">4.6</span>
                            </div>
                            <div class="text-muted">
                                <i class="fas fa-users mr-1"></i>
                                3 habitaciones disponibles
                            </div>
                        </div>
                        <p class="text-2xl font-weight-bold text-success">
                            €180 <span class="text-sm font-weight-normal text-muted">/ noche</span>
                        </p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary w-100" disabled>Añadir al carrito</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection