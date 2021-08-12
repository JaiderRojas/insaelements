
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  @include('insa::layouts.partials.head')
  {{-- Laravel Mix - CSS File --}}
       {{-- <link rel="stylesheet" href="{{ mix('css/insa.css') }}"> --}}

</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
  @include('insa::layouts.partials.navbar')
   <!-- /.navbar -->

<!-- Main Sidebar Container -->
  @include('insa::layouts.partials.sidebar')

   <!-- /Main Sidebar Container -->
   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

 @section('content')
  @show
</div>
  <!-- Main Footer -->
@include('insa::layouts.partials.footer')
</div>
 <!-- /.Main Footer -->


<!-- REQUIRED SCRIPTS -->
@include('insa::layouts.partials.script')
<!-- ./REQUIRED SCRIPTS -->

{{-- Laravel Mix - JS File --}}
{{-- <script src="{{ mix('js/insa.js') }}"></script> --}}

  
 

  




</body>
</html>
