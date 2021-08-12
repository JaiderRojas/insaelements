@extends('insa::layouts.master')
@section('title', 'Inicio')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="container">
        <div class="card">
            <h5 class="card-header" style="background-color: orange;">
                <img src="{{ asset('elements/imagines/fondohome.png') }}" style="width: 3%" alt="...">Autorización
                Prestamo y Salida de
                Elementos
                Devolutivos.
            </h5>
            <div class="card-body">
                <form action="{{ route('store') }}" method="POST">
                    {{ csrf_field() }}

                    <div class="row mb-3">
                        <label for="" class="col-sm-3 col-form-label col-form-label-sm">Centro de
                            formación:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-sm" value="CEFA">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="row mb-3">
                                <label for="" class="col-sm-4 col-form-label col-form-label-sm">Fecha de
                                    préstamo:</label>
                                <div class="col-sm-5">
                                    <input type="datetime" name="date" class="form-control form-control-sm"
                                        value="<?php echo date('Y-m-d\ H-i'); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="row mb-3">
                                <label for="" class="col-sm-4 col-form-label col-form-label-sm">Fecha de
                                    entrega:</label>
                                <div class="col-sm-5">
                                    <input name="date_return" type="date" class="form-control form-control-sm"
                                        placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="row mb-3">

                                <label for="" class="col-sm-5 col-form-label col-form-label-sm">Nombre del
                                    solicitante:</label>
                                <div class="col-sm-7">
                                    <select class="form-control-sm select2" name="id_cliente" style="width: 100%;">
                                        @foreach ($peoples as $people)
                                            <option selected="selected" value="{{ $people->id }}">{{ $people->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="row mb-3">
                                <label for="" class="col-sm-4 col-form-label col-form-label-sm">Cargo:</label>
                                <div class="col-sm-7">
                                    <select type="text" name="" class="form-control-sm">
                                        <option value="">elije tu nombre</option>
                                        @foreach ($peoples as $people)
                                            <option value="{{ $people->id }}">{{ $people->cargo }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-sm-4 col-form-label col-form-label-sm">Formación o
                            dependancia:</label>
                        <div class="col-sm-4">
                            <input name="dependence" type="text" class="form-control form-control-sm" placeholder="">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-sm-4 col-form-label col-form-label-sm">Lugar al cual se
                            transladan los elementos:</label>
                        <div class="col-sm-4">
                            <input name="translation" type="text" class="form-control form-control-sm" placeholder="">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-sm-4 col-form-label col-form-label-sm">Objetivo por el cual
                            se
                            transladan los elementos:</label>
                        <div class="col-sm-4">
                            <input name="objective" type="text" class="form-control form-control-sm" placeholder="">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-sm-4 col-form-label col-form-label-sm">Nombre Autoriza Salida:</label>
                        <div class="col-sm-4">
                            <select class="form-control-sm select2" name="id_usuarios" style="width: 100%;">
                                @foreach ($peoples as $people)
                                    <option selected="selected" value="{{ $people->id }}">{{ $people->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <input type="submit" value="Guardar" name="guardar" class="btn btn-success">

                </form></br>
                <form action="" class="form-inline ml-3">
                    {{ csrf_field() }}
                    @foreach ($elements as $element)
                        <div class="input-group input-group-sm">
                            <input type="search" name="element_id" value="{{ $element->name }}"
                                class="form-control form-control-sm" placeholder="{{ $element->element_name }}">
                        </div>
                    @endforeach
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>

                <form action="{{ route('store') }}" method="POST">
                    {{ csrf_field() }}


                    <table id="" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Nombre Elemento</th>
                                <th scope="col">Descripcion del elemento</th>
                                <th scope="col">Estado del Elemento<br>(en el prestamo)</th>
                                <th scope="col">Codigo de inventario</th>
                                <th scope="col">Cuentadante<br></th>
                                <th scope="col" name="total">Cantidad</th>
                                <th scope="col">Firma Cuentadante<br></th>
                                <th scope="col">Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($elements as $element)
                                    <td> <input name="element_id" type="text" class="form-control form-control-sm"
                                            value="{{ $element->id }}">{{ $element->element_name }}

                                    </td>
                                    <td>{{ $element->description }}</td>
                                    <td>{{ $element->condition }}</td>
                                    <td>{{ $element->inventories[0]->inventoryCode }}</td>
                                    <!--Cuando sale el error property does not exist on this collection instance. se le pone  [] un valor 0 y muestre ese dato -->
                                    <td>
                                        <select class="form-control-sm select2" name="id_usuarios" style="width: 100%;">
                                            @foreach ($peoples as $people)
                                                <option selected="selected" value="{{ $people->id }}">
                                                    {{ $people->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td><input name="total" type="number" class="form-control form-control-sm"></td>
                                    <td>firma</td>
                                @endforeach
                                <td><input type="submit" name="save_button" value="save" class="btn btn-success"></td>
                </form>

                </tr>

                </tbody>
                </table>
                <a href="{{ route('show') }}">descargarpdf</a>
            </div>
        </div>
    </div>
    </div>

@stop
