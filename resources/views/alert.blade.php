
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detector AntiRobo</title>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <style>
        .logos{

            width: 250px;
            height: 250px;
            position: fixed;
            left: 10px;

        }

        .tabla{
            margin: 150px auto;
            width: 1200px;

        }

    </style>
</head>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
    <a class="navbar-brand" href="{{route('home')}}"> <i class="fas fa-microchip"></i> ELECTRÓNICOS S.A.</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/#contactanos">Contáctanos <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Productos
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{route('dar')}}"> <i class="fa fa-lock" aria-hidden="true"></i> DAR</a>
                    <a class="dropdown-item" href="{{route('electrosen')}}"> <i class="fas fa-car"></i> ELECTROSEN</a>
                    <a class="dropdown-item" href="/alert">  Consulta DAR</a>
                </div>
            </li>
        </ul>
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/login') }}">{{ __('Login') }}</a>
                </li>
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                        <a class="dropdown-item" href="{{route('login.destroy')}}">
                            Logout
                        </a>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
</nav>
<body>




<center><h1>Detector AntiRobo</h1> <button type="button" class="btn btn-outline-secondary" href="{{route('dar')}}" >REGRESAR</button> </center>  


               


<table class="tabla">

  <thead>
    <tr class="table-success">
      <th scope="col">#</th>
      <th scope="col">Foto</th>
      <th scope="col">comentario</th>
      <th scope="col">fecha</th>
    </tr>
  </thead>
  <tbody>

  <tr>
  <td>1</td>
  <td>
    <img src="https://drive.google.com/uc?export=view&id=1mSRtFME1K_qT5GP5LjPLpCQ8b9S7A3Ak" alt="Imagen" width="200" height="150">
  </td>
  <td>El sensor PIR detecta objetos y movimientos. Foto enviada con éxito.</td>
  <td>30/05/2023</td>
</tr>

<tr>
  <td>2</td>
  <td>
    <img src="https://drive.google.com/uc?export=view&id=1SwVQ9faBDnCnUr_pIZM-xeIVn3on7_ja" alt="Imagen" width="200" height="150">
  </td>
  <td>El sensor PIR detecta objetos y movimientos. Foto enviada con éxito.</td>
  <td>30/05/2023</td>
</tr>

<tr>
  <td>3</td>
  <td>
    <img src="https://drive.google.com/uc?export=view&id=1CAFy01TlL24IFiQFe2vY82PZk9M3NjZm" alt="Imagen" width="200" height="150">
  </td>
  <td>El sensor PIR detecta objetos y movimientos. Foto enviada con éxito.</td>
  <td>31/05/2023</td>
</tr>

<tr>
  <td>4</td>
  <td>
    <img src="https://drive.google.com/uc?export=view&id=1LbDZFdWsNg1WRAsRQrF3uioTVEVLmwVt" alt="Imagen" width="200" height="150">
  </td>
  <td>El sensor PIR detecta objetos y movimientos. Foto enviada con éxito.</td>
  <td>31/05/2023</td>
</tr>

  @foreach($alerts as $alert )
      <tr>
          <td>{{$alert->id}}</td>
          <td>{{$alert->foto}}</td>
          <td>{{$alert->comentario}}</td>
          <td>{{$alert->date}}</td>
      </tr>
  @endforeach


  </tbody>
</table>



</body>
</html>
