@extends('insa::layouts.master')
@section('title', 'Inicio')
@section('content')
    <div class="container ">
        {{-- card --}}
        <div class="card card-#FF5833 card-outline" style="margin: 5%; width: 70%" >
            <div class="card-body" style="background-color: darkorange;">
                <h5 class="card-title">¡Hello!</h5>

                <p class="card-text">
                    Thank you for registering to our web application, discover the advantages that INSA-ELEMENTS
                    can offer you, you will be able to request loans online, in a safe way.
                </p>
            </div>
        </div>
        <div class="container" style="">
            {{-- slider --}}
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('elements/imagines/insa.jpeg') }}" class="d-block w-50" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('elements/imagines/video.jpg') }}" class="d-block w-50" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('elements/imagines/carro.jpg') }}" class="d-block w-50" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('elements/imagines/tractor.jpg') }}" class="d-block w-50" alt="...">
                    </div>
                </div>
            </div>
            {{-- end slider --}}
        </div>
    </div>
    {{-- end card --}}


    </div>
<script src="{{ asset('AdminLTE-3.0.5/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('AdminLTE-3.0.5/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('vendor/jquery-ui-1.12.1/jquery-ui.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('AdminLTE-3.0.5/dist/js/adminlte.min.js') }}"></script>
@stop

