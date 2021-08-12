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
                        {{-- buscador --}}
                        <form action="{{ route('lrshow') }}" class="form-inline ml-3">
                            {{ csrf_field() }}
                            <div class="input-group input-group-sm">
                                <input type="search" name="nombre" value="" class="form-control form-control-sm"
                                    placeholder="">
                            </div>
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </body>
    </div>
@stop
