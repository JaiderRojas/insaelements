@extends('insa::administra.master')
@section('title', 'Registro')
@section('content')
    <div class="container">


        <body>

            <!-- Content Wrapper. Contains page content -->
            <div class="container">
                <div class="card">
                    <h5 class="card-header" style="background-color: orange;">
                        <img src="{{ asset('elements/imagines/fondohome.png') }}" style="width: 3%" alt="...">Autorización
                        Prestamo y Salida de Elementos
                        Devolutivos.
                    </h5>
                    <div class="card-body">
                        <form>
                            <div class="row mb-3">
                                <label for="colFormLabel" class="col-sm-3 col-form-label col-form-label-sm">Centro de
                                    formación:</label>
                                <div class="col-sm-4">
                                    CEFA
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="row mb-3">
                                        <label for="colFormLabel" class="col-sm-5 col-form-label col-form-label-sm">Fecha de
                                            préstamo:</label>
                                        <div class="col-sm-4">
                                            {{ $movement->date }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="row mb-3">
                                        <label for="colFormLabel" class="col-sm-4 col-form-label col-form-label-sm">Fecha de
                                            entrega:</label>
                                        <div class="col-sm-5">
                                            {{ $movement->date_return }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-7">
                                    <div class="row mb-3">
                                        <label for="nombresolicitante"
                                            class="col-sm-5 col-form-label col-form-label-sm">Nombre del
                                            solicitante:</label>
                                        <div class="col-sm-7">
                                            {{ $people->name }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="row mb-3">
                                        <label for="colFormLabel"
                                            class="col-sm-4 col-form-label col-form-label-sm">Cargo:</label>
                                        <div class="col-sm-5">
                                            {{ $people->cargo }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="colFormLabel" class="col-sm-4 col-form-label col-form-label-sm">Formación o
                                    dependancia:</label>
                                <div class="col-sm-4">
                                    {{ $movement->dependence }}
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="colFormLabel" class="col-sm-4 col-form-label col-form-label-sm">Lugar al cual se
                                    transladan los elementos:</label>
                                <div class="col-sm-4">
                                    {{ $movement->translation }}
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="colFormLabel" class="col-sm-4 col-form-label col-form-label-sm">Objetivo por el
                                    cual
                                    se
                                    transladan los elementos:</label>
                                <div class="col-sm-4">
                                    {{ $movement->objective }}
                                </div>
                            </div>
                            {{-- tabla elementos --}}
                            <table class="table table-bordered border-dark">
                                <thead class="table-secondary">
                                    <tr>
                                        <th scope="col">Cantidad</th>
                                        <th scope="col">Elemento</th>
                                        <th scope="col">Descripcion del elemento</th>
                                        <th scope="col">Codigo de inventario</th>
                                        <th scope="col">Estado del Elemento<br>(en el prestamo)</th>
                                        <th scope="col">Estado del Elemento<br>(en el regreso)</th>
                                        <th scope="col">Cuentadante</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($movement_details as $m)
                                        <tr>
                                            <td>{{ $m->total }}</td>
                                            <td>{{ $m->element->element_name }}</td>
                                            <td>{{ $m->element->description }}</td>
                                            {{-- <td>{{$m->element->inventories->inventoryCode}}</td> --}}
                                            <td>{{ $m->id }}</td>
                                            <td>{{ $m->element->condition }}</td>
                                            <td>{{ $m->id }}</td>
                                            <td>{{ $m->element->inventories[0]->id_cuentadante}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <br>

                            <table class="table table-bordered border-dark">
                                <tbody>
                                    <tr>
                                        <td><b>Firma:</b> Nombre de quien autoriza la salida del SENA:</td>
                                        <td><b>Cargo</b> Quien autoriza salida:</td>
                                    </tr>
                                    <tr>
                                        <td><b>Firma Solicitante:</b></td>
                                    </tr>

                                </tbody>
                            </table>

                            <div class="row mb-3">
                                <input class="form-control" type="text"
                                    placeholder="Nombre del Vigilante cuando salga del SENA">

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
