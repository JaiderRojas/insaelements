@extends('insa::administra.master')
@section('title','Registro')
@section('content')
<div class="container">


<body>

   <!-- Content Wrapper. Contains page content -->
    <div class="container">
        <div class="card">
            <h5 class="card-header" style="background-color: orange;">
                <img src="{{ asset('elements/imagines/fondohome.png') }}" style="width: 3%" alt="...">Autorización Prestamo y Salida de Elementos
                Devolutivos.
            </h5>
            <div class="card-body">
                <form action="" method="POST">
                  
                    <div class="row mb-3">
                        <label for="colFormLabel" class="col-sm-3 col-form-label col-form-label-sm">Centro de
                            formación:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-sm" value="CEFA">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="row mb-3">
                                <label for="colFormLabel" class="col-sm-5 col-form-label col-form-label-sm">Fecha de
                                    préstamo:</label>
                                <div class="col-sm-4">
                                    <input type="date" class="form-control form-control-sm" id="colFormLabel"
                                        placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="row mb-3">
                                <label for="colFormLabel" class="col-sm-4 col-form-label col-form-label-sm">Fecha de
                                    entrega:</label>
                                <div class="col-sm-5">
                                    <input type="date" class="form-control form-control-sm" id="colFormLabel"
                                        placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="row">
                        <div class="col-md-7">
                            <div class="row mb-3">
                                <label for="nombresolicitante" class="col-sm-5 col-form-label col-form-label-sm">Nombre del
                                    solicitante:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control form-control-sm" id="nombresolicitante" name="nombresolicitante">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="row mb-3">
                                <label for="colFormLabel" class="col-sm-4 col-form-label col-form-label-sm">Cargo:</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control form-control-sm" id="colFormLabel"
                                        placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="colFormLabel" class="col-sm-4 col-form-label col-form-label-sm">Formación o
                            dependancia:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-sm" id="colFormLabel" placeholder="">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="colFormLabel" class="col-sm-4 col-form-label col-form-label-sm">Lugar al cual se
                            transladan los elementos:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-sm" id="colFormLabel" placeholder="">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="colFormLabel" class="col-sm-4 col-form-label col-form-label-sm">Objetivo por el cual
                            se
                            transladan los elementos:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-sm" id="colFormLabel" placeholder="">
                        </div>
                    </div>
                    <table class="table table-bordered border-dark">
                        <thead class="table-secondary">
                            <tr>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Descripcion del elemento</th>
                                <th scope="col">Codigo de inventario</th>
                                <th scope="col">Estado del Elemento<br>(en el prestamo)</th>
                                <th scope="col">Estado del Elemento<br>(en el regreso)</th>
                                <th scope="col">Cuentadante</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                 <td>Bueno</td>
                            </tr>

                        </tbody>
                    </table>
                    <br>

                    <table class="table table-bordered border-dark">
                        <tbody>
                            <tr>
                                <td><b>Firma:</b>  Nombre de quien autoriza la salida del SENA:</td>
                                <td><b>Cargo</b>  Quien autoriza salida:</td>
                            </tr>
                            <tr>
                                <td><b>Firma Solicitante:</b></td>
                            </tr>
                            
                        </tbody>
                    </table>
                            
                                 <div class="row mb-3">
                       <input class="form-control" type="text" placeholder="Nombre del Vigilante cuando salga del SENA">
                       
                    </div>
                    <div class="row mb-3">
                       <input class="form-control" type="text" placeholder="Hora y Fecha de salida">
                       
                    </div>
                    
                                            
                    <input type="submit" value="enviar" class="btn btn-primary">
                     
                    
                </form>
            </div>
        </div>
    </div>


   
</body>
 </div>
@stop