@extends('insa::layouts.master')
@section('title', 'autoriza')
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
                        <form  action=""  class="form-inline ml-3">
                       {{ csrf_field() }}
                       
                        
                        <div class="input-group input-group-sm">
                            <input type="search" name="people_id" value="" class="form-control form-control-sm" placeholder="Nombres Completos">
                        </div>
                     
                      
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                             <i class="fas fa-search"></i>
                        </button>
                    </div>
                 </form>
                 
                    <table id="" class="table table-bordered table-striped">
                        <thead>
                             <tr>
                                <th scope="col">Nombre Solicitante</th>
                                <th scope="col">Nombre Elemento</th>
                                <th scope="col">Total Elementos</th>
                                <th scope="col">Cuentadante<br></th>
                                <th scope="col">Autoriza Si o No</th>
                                <th scope="col">Guardar</th>
                            </tr>
                        </thead>
                       <tbody>
                             <tr>
                                @foreach($peoples as $peoples)
                                <td>{{$peoples->name}} </td>
                                @endforeach

                            
                                <td>k </td>
                                <td>j</td>
                                <td>firma</td>
                              
                                
                                <td><input type="submit" name="save_button" value="save" class="btn btn-success"></td>
                            
                                     
                            </tr>

                         </tbody>
                    </table>
              
            </div>
        </div>
    </div>
</div>

@stop
