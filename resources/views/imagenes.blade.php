<!DOCTYPE html>
<html>
<head>
    <title>Imágenes de Movimiento Detectado</title>
</head>
<body>
<h1>Imágenes Capturadas</h1>
<ul>
    @foreach($imagenes as $imagen)
        <li>
            <img src="{{ Storage::url($imagen->ruta_imagen) }}" width="100" alt="Imagen de movimiento detectado">
            <span>{{ $imagen->fecha }}</span>
        </li>
    @endforeach
</ul>
</body>
</html>
