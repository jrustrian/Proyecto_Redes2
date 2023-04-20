@extends('layouts.plantilla2')
@section('contenido')
    <div class="container mt-3">
        <h2>BITÁCORA</h2>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div>
                <div class="col-md-12">
                    <h2 class="text-center mb-5">Historial de activación DAR</h2>
                    <form method="GET" action="">
                        <label for="start_date">Fecha de inicio:</label>
                        <input type="date" name="start_date" id="start_date">
                        <label for="end_date">Fecha de fin:</label>
                        <input type="date" name="end_date" id="end_date">
                        <button type="submit">Buscar</button>
                    </form>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">FOTO</th>
                                <th class="text-center">FECHA</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td class="text-center">001</td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#exampleModal">
                                            Imagen1
                                        </button>
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Fotografía</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                <img src="{{ asset('img/Ejemplo.jpg') }}" class="img-fluid mx-auto d-block" alt="Imagen de ejemplo">

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                    </td>
                                    <td class="text-center">03/02/2023</td>
                                    <td class="text-center">
                                        <button type="submit" class="btn btn-danger btn-xs">
                                            <span class="fas fa-trash-alt"></span>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">002</td>
                                    <td class="text-center">
                                    <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#exampleModal">
                                            Imagen2
                                        </button>
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Fotografía</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                <img src="{{ asset('img/Ejemplo.jpg') }}" class="img-fluid mx-auto d-block" alt="Imagen de ejemplo">

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                    </td>
                                    <td class="text-center">05/04/2023</td>
                                    <td class="text-center">
                                        <button type="submit" class="btn btn-danger btn-xs">
                                            <span class="fas fa-trash-alt"></span>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">003</td>
                                    <td class="text-center">
                                    <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#exampleModal">
                                            Imagen3
                                        </button>
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Fotografía</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                <img src="{{ asset('img/Ejemplo.jpg') }}" class="img-fluid mx-auto d-block" alt="Imagen de ejemplo">

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                    </td>
                                    <td class="text-center">10/04/2023</td>
                                    <td class="text-center">
                                        <button type="submit" class="btn btn-danger btn-xs">
                                            <span class="fas fa-trash-alt"></span>
                                        </button>
                                    </td>
                                </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">FOTO</th>
                                <th class="text-center">FECHA</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
<script>
$(document).ready(function() {
    $('#exampleModal').modal('hide');

    $('button[data-target="#exampleModal"]').on('click', function() {
        $('#exampleModal').modal('show');
    });
    $('img').on('click', function() {
        var imgSrc = $(this).attr('src');
        $('#exampleModal').find('img').attr('src', imgSrc);
        $('#exampleModal').modal('show');
    });
});
</script>
<style>
.modal-body img {
  max-width: 100%;
  max-height: calc(100vh - 200px);
}
</style>
@endsection