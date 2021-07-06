<form class="form-inline my-2 my-lg-0" type="get" action="{{ url('/Search') }}">
	<input type="search" name="Search" class="form-control mr-sm-2" placeholder="Search element">
                    <button class="btn btn-success my-2-my-sm-0" type="submit">Search</button>
                      <table class="table table-bordered border-dark">
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
                              @foreach( $elements as $element)
                                <tr>
                                   
                                    <td>{{ $element->id }}</td>
                                    <td>{{ $element->element_name}}</td>
                                    <td>{{ $element->description}}</td>
                                    <td>{{ $element->condition}}</td>
                                    <td>{{ $element->inventory_id }}</td>
                                    <td style="display:flex"></td>
                                    <td></td>
                            
                                </tr>
                               @endforeach
                        </tbody>
                      </table>
                          

</form>