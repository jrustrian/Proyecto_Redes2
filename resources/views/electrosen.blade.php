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
                <img src="img/logotipo.png" class="d-block w-100" alt="..."/>
            </div>
            <div class="carousel-item">
                <img src="img/logotipo.png" class="d-block w-100" alt="..."/>
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
                <img src="img/logotipo.png" class="d-block w-100" alt="..."/>
            </div>
            <div class="carousel-item">
                <img src="img/logotipo.png" class="d-block w-100" alt="..."/>
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
    <h4>ELECTROSEN &nbsp;<i class="fas fa-car"></i></h4>
    <hr color="gray">
    <img src="img/electrosen.jpg" class="ft2" width="200" height="200"/>
    <p>
        ELECTROSEN es un dispositivo cuyo nombre significa "Sensor Electrónico", debido a que en su estructura
        integra un sensor de proximidad que permite identificar a que distancia se encuentra un objeto.
        Gracias a este pequeño artefacto podemos estacionar nuestro vehículo con más facilidad, ya que su trabajo
        es dar una alerta cuando el vehículo esté a cierta distancia de un objeto.<br>
    </p>

    <br>
</div>
@endsection

@section('fotos')
<div class="container fotos_electrosen" id="fotografias">
    <h4>Fotografías</h4>
    <hr color="gray">

    <ul>
        <li><img src="img/electrosen1.jpg" class="ft" title="Prototipo ELECTROSEN"> </li>
        <li><img src="img/electrosen2.jpg" class="ft" title="Prototipo ELECTROSEN"></li>
        <li><img src="img/electrosen3.jpg" class="ft" title="Prototipo ELECTROSEN"></li>
        <li><img src="img/electrosen5.jpg" class="ft" title="ELECTROSEN Finalizado"></li>
        <li><img src="img/electrosen6.jpg" class="ft" title="ELECTROSEN Finalizado"></li>
    </ul>
</div>


<div class="container videos_electrosen" id="videos">
    <h4>Videos</h4>
    <hr color="gray">
    <ul>
        <li>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/7qNWHZGWzPE" title="Prototipo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </li>
        <li>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/8O4Kph7va9k" title="ELECTROSEN" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </li>
        <li>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/nSrgwCeLCcA" title="Pruebas ELECTROSEN" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </li>
    </ul>

</div>
@endsection

@section('footer')
<div id="copyRight">
    <center>© Copyright ELECTRÓNICOS S.A.</center>
</div>
@endsection
