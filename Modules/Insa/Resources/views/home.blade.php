@extends('insa::layouts.master')
@section('title','Inicio')
@section('content')

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <div class="card">

            </div>
                <div class="card card-#FF5833 card-outline">
                         <div class="card-body" style="background-color: darkorange;">
                      <h5 class="card-title">¡Hello!</h5>

                      <p class="card-text">

                        Thank you for registering to our web application, discover the advantages that INSA-ELEMENTS can offer you, you will be able to request loans online, in a safe way.
                      </p>

                    </div>
                  </div>

                </div><!-- /.card -->
                </div>

                <!-- /.col-md-6 -->
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                   <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{ asset('elements/imagines/insa.jpeg') }}" class="d-block w-50" alt="..." align="right" width="600" height="300">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('elements/imagines/video.jpg') }}" class="d-block w-50" alt="..." align="right"  width="600" height="300">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('elements/imagines/carro.jpg') }}" class="d-block w-50" alt="..." align="right"  width="600" height="300">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('elements/imagines/tractor.jpg') }}" class="d-block w-50" alt="..." align="right" width="600" height="300" >
                    </div>
                  </div>
                 </div>
           </div>



          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

@stop
