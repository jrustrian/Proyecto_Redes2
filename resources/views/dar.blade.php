@extends('layouts.plantilla')
@section('carousel')
    <div class="content container" id="contenedor">
        <!-- Carrusel -->
        <div id="carouselImage" class="carousel slide my-4 mx-5" data-ride="carousel" >
            <ol class="carousel-indicators">
                <li data-target="#carouselImage" data-slide-to="0" class="active"></li>
                <li data-target="#carouselImage" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner" id="imageCarusel">
                <div class="carousel-item active">
                    <img src="img/DAR.png" class="d-block w-100" alt="..."/>
                </div>
                <div class="carousel-item">
                    <img src="img/DAR.png" class="d-block w-100" alt="..."/>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselImage" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselImage" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div id="contenedor2">
        <!-- Carrusel -->
        <div id="carouselImage2" class="carousel slide my-4 mx-5" data-ride="carousel2" >
            <ol class="carousel-indicators">
                <li data-target="#carouselImage2" data-slide-to="2" class="active"></li>
                <li data-target="#carouselImage2" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" id="imageCarusel">
                <div class="carousel-item active">
                    <img src="img/DAR.png" class="d-block w-100" alt="..."/>
                </div>
                <div class="carousel-item">
                    <img src="img/DAR.png" class="d-block w-100" alt="..."/>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselImage2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselImage2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
@endsection

@section('info')
    <!-- Contenedor Información -->
    <div class="container my-5" id="info">
        <h4>DAR &nbsp;<i class="fa fa-lock" aria-hidden="true"></i></h4>
        <hr color="gray">
        <img src="img/dar.jpg" class="ft2" width="200" height="200"/>
        <p>
            DAR es un dispositivo cuyo nombre significa "Detector Anti-Robo". Su función consiste en
            alertar cuando alguien intenta robar un objeto,
            realizando una toma fotográfica del sujeto en tiempo real y por medio de conexión
            Wi-Fi envía un mensaje de alerta al propietario o a una entidad de seguridad
            a través de la red social Telegram.
            <br>
        </p>

        <br>
    </div>
@endsection

@section('fotos')
    <div class="container fotos_electrosen" id="fotografias">
        <h4>Fotografías</h4>
        <hr color="gray">

        <ul>
            <li><img src="img/dar1.jpg" class="ft" title=""> </li>
            <li><img src="img/dar2.jpg" class="ft" title=""></li>
            <li><img src="img/dar3.jpg" class="ft" title=""></li>
            <li><img src="img/dar5.jpg" class="ft" title=""></li>
           
        </ul>
    </div>


   
@endsection

@section('footer')
    <div id="copyRight">
        <center>© Copyright ELECTRÓNICOS S.A.</center>
    </div>
@endsection
