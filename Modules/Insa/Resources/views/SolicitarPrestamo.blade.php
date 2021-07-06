@extends('insa::layouts.master')
@section('title', 'Inicio')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="container">
        {{-- form --}}
        <div class="card">
            <h5 class="card-header" style="background-color: orange;">
                <img src="{{ asset('elements/imagines/fondohome.png') }}" style="width: 3%" alt="...">Autorización
                Prestamo y Salida de
                Elementos
                Devolutivos.
            </h5>
            <div class="card-body">
                <form action="" method="POST">
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
                                    <input type="datetime" name="loan_date" class="form-control form-control-sm"
                                        value="<?php echo date('Y-m-d\ H-i'); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="row mb-3">
                                <label for="" class="col-sm-4 col-form-label col-form-label-sm">Fecha de
                                    entrega:</label>
                                <div class="col-sm-5">
                                    <input name="delivery_date" type="date" class="form-control form-control-sm"
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
                                    <input type="text" class="form-control form-control-sm" id="nombresolicitante"
                                        name="name">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="row mb-3">
                                <label for="" class="col-sm-4 col-form-label col-form-label-sm">Cargo:</label>
                                <div class="col-sm-5">
                                    <input name="cargo" type="text" class="form-control form-control-sm" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-sm-4 col-form-label col-form-label-sm">Formación o
                            dependancia:</label>
                        <div class="col-sm-4">
                            <input name="dependencies" type="text" class="form-control form-control-sm" placeholder="">
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
                            <input name="objetive" type="text" class="form-control form-control-sm" placeholder="">
                        </div>
                    </div>
                </form>
                <button class="btn btn-outline-secondary" id="btnnuevoelemento">Agregar Elemento</button>
                <br>
                </br>
                <table class="table table-hover">
                    <thead class="table-secondary">
                        <tr>
                            <th scope="col">Nombre Elemento<i class="fas fa-search"></i></th>
                            <th scope="col">Descripcion del elemento</th>
                            <th scope="col">Estado del Elemento<br>(en el prestamo)</th>
                            <th scope="col">Codigo de inventario</th>
                            <th scope="col">Cuentadante<br></th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Firma Cuentadante<br></th>
                        </tr>
                    </thead>
                    {{-- table --}}
                    <tbody id="tbelementos">
                        <tr id="tr">
                        {{-- append --}}
                        <td>
                            {{-- search --}}
                            <input type="text" id="search" class="form-control form-control-sm">
                        </td>
                        </tr>
                        {{-- end append --}}
                    </tbody>
                </table>
                {{-- end table --}}

                <table>
                    <tr>
                        <th>Nombre Autorizacion</th>
                        <th>Cargo</th>
                    </tr>
                    <tbody>
                        <tr>
                            <td><input type="text" name="name" class="form-control-sm"></td>
                            <td><input type="text" name="cargo" class="form-control-sm"></td>
                        </tr>
                        <tr>
                            <td><b>Firma Solicitante: <b></td>
                        </tr>
                    </tbody></br></br>
                </table>
                <input type="submit" value="Guardar" class="btn btn-success">
            </div>
        </div>
        {{-- end form --}}
    </div>
    </div>
    {{-- jquery --}}
    <script src="{{ asset('AdminLTE-3.0.5/plugins/jquery/jquery.min.js') }}"></script>
    {{-- bootstrap.bundle --}}
    <script src="{{ asset('AdminLTE-3.0.5/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- jquery-ui -->
    <script src="{{ asset('vendor/jquery-ui-1.12.1/jquery-ui.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('AdminLTE-3.0.5/dist/js/adminlte.min.js') }}"></script>
    {{-- agregar filas a la tabla --}}
    <script>
        $(document).ready(function() {
            $('#btnnuevoelemento').click(function() {
                agregar();
            });

        });
        var cont = 0;

        function agregar() {
            cont++;
            var htmlTags = '<tr>' +
                '<td>'+
                    '<input type="text" id="search" class="form-control form-control-sm">'+
                '</td>'+
                '<td>' +
                '<select type="text" id="selectelements" name="element_id" class="form-control-sm">' +
                '<option>Elegir Elemento</option>' +
                '@foreach ($elements as $e)'+
                    '<option value="{{ $e->id }}">{{ $e->name }}</option>'+
                    '@endforeach ' +
            '</select>' +
            '</td>' +
            '<td></td>' +
            '<td></td>' +
            '<td></td>' +
            '<td></td>' +
            '<td></td>' +
            '<td>' + cont + '</td>' +
                '</tr>';
            $("#tbelementos").append(htmlTags);
        }
        // search
        $('#search').autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: "{{route('search')}}",
                    dataType: 'json',
                    data: {
                        term: request.term
                    },
                    success: function(data) {
                        response(data)
                    }
                });
            }
        });
        $(document).on("change", "#search", function(){

             let td='@foreach ($elements as $e)'+
             '<td>'+
                    '{{ $e->name }}'+
                    '</td>' +
            '<td>jajaj</td>' +
            '<td>jajaja</td>' +
            '<td>jajaja</td>@endforeach'
            $("#tr").append(td);
        });
    </script>

@stop
   {{-- if ($(this).val().length > 0) {
      $.ajaxSetup({
      headers: {
      este es mi error, este token no me funciona
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
      })
      $.ajax({
      method: "POST",
      url: "{{ route('select') }}",
      data: {
      id: $(this).val()
      }
      })
      .done(function(html) {
      $("#tbelementos").html(html);
      });
      } else {
      alert('No hay naaaaaaa');
      }
      })
      $(document).on("change", "#selectelements", function() { --}}
