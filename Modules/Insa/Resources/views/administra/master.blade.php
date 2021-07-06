<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

 @include('insa::administra.partials.head')

<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- navbar -->
  @include('insa::administra.partials.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
   @include('insa::administra.partials.sidebar')
  <!-- /.Main Sidebar Container -->
  
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
 
  <!-- /.content-wrapper -->
  @section('content')
  @show

   </div>
  <!-- Main Footer -->
   @include('insa::administra.partials.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('insa::administra.partials.scripts')
<!-- jQuery -->

</body>
</html>
