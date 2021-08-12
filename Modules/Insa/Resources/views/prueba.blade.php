<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <style>
      .card-header{
        text-align: center;
        font: 2rem;
        color: darkgray;
      }
      .table{
        width: 100%;
        border: 1px solid #999;
      }
  </style>

 
</head>
<body>
  <div class="container" >
        <div class="card">
            <h5 class="card-header" style="background-color: orange;">
                <img src="{{ asset('elements/imagines/fondohome.png') }}" style="width: 3%" alt="...">Autorización Prestamo y Salida de
                Elementos
                Devolutivos.
            </h5>
            <div class="card-body">

         
        <form method="POST" action=" {{url('prueba')}}">
             @foreach($prestamos as $prestamo)
                
                    <div class="row mb-3">
                        <label for="colFormLabel" class="col-sm-3 col-form-label col-form-label-sm">Centro de
                            formación:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-sm" value="CEFA">
                        </div>
                    </div>
                    
                    <div class="row">
                        
                        <div class="col-md-5">
                            <div class="row mb-3">
                                <label for="colFormLabel" class="col-sm-4 col-form-label col-form-label-sm">Fecha de
                                    préstamo:</label>
                                <div class="col-sm-5">
                                    <input type="datetime" name="loan_date" class="form-control form-control-sm" value="{{ $prestamo->loan_date}}">
                                </div>
                            </div>
                        </div>
        
                        <div class="col-md-5">
                            <div class="row mb-3">
                                <label for="colFormLabel" class="col-sm-4 col-form-label col-form-label-sm">Fecha de
                                    entrega:</label>
                                <div class="col-sm-5">
                                    <input name="delivery_date" type="date" class="form-control form-control-sm" id="colFormLabel"
                                        placeholder="" value="{{ $prestamo->delivery_date}}">
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
                                        name="name" value="Neida Romero">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="row mb-3">
                                <label for="colFormLabel" class="col-sm-4 col-form-label col-form-label-sm">Cargo:</label>
                                <div class="col-sm-5">
                                    <input  name="cargo" type="text" class="form-control form-control-sm" id="colFormLabel"
                                        placeholder="" value="
                                        Aprendiz">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="colFormLabel" class="col-sm-4 col-form-label col-form-label-sm">Formación o
                            dependancia:</label>
                        <div class="col-sm-4">
                            <input name="dependencies" type="text" class="form-control form-control-sm" id="colFormLabel" value="{{ $prestamo->dependencies}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="colFormLabel" class="col-sm-4 col-form-label col-form-label-sm">Lugar al cual se
                            transladan los elementos:</label>
                        <div class="col-sm-4">
                            <input name="translation" type="text" class="form-control form-control-sm" id="colFormLabel" value="{{ $prestamo->translation}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="colFormLabel" class="col-sm-4 col-form-label col-form-label-sm">Objetivo por el cual
                            se
                            transladan los elementos:</label>
                        <div class="col-sm-4">
                            <input name="objetive" type="text" class="form-control form-control-sm" id="colFormLabel" value="{{ $prestamo->objetive}}">
                        </div>
                    </div>
                    @endforeach
     
 </form>
 
         <table class="table">
                    <thead class="table-secondary">
                            <tr>
                                <th scope="col">Nombre Elemento</th>
                                <th scope="col">Descripcion del elemento</th>
                                 <th scope="col">Estado del Elemento<br>(en el prestamo)</th>
                                 <th scope="col">Codigo de inventario</th>
                                <th scope="col">Cuentadante<br></th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Firma Cuentadante<br></th>
                            </tr>
                    </thead>
                    <tbody>
                              <td><input type="text"  class="form-control form-control-sm" id="search"></td>
                              <td>es hermoso</td>
                              <td>bueno</td>
                              <td>09293</td>
                              <td>jose alberto</td>
                              <td>4</td>
                              <td>albert</td>
                    </tbody>
        </table>

                     <table>
                            <thead>
                                 <tr>
                                    <th>Nombre Autorizacion</th>
                                    <th>Cargo</th>
                                </tr>

                            </thead>
                            <tbody>
                                 <tr>
                                  
                                    <td><input type="text" name="cargo" class="form-control-sm"></td>
                                    </tr>
                                    </tbody>
                                            <tr>
                                                <td><b>Firma Solicitante: </b></td>
                                            </tr></br></br>

                            </tbody>
                                
                         </table>

                                
                         
            </div>
        </div>
    </div>

        

</body>
</html>