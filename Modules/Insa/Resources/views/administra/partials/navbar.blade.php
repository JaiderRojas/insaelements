 <nav class="main-header navbar navbar-expand  navbar-white" style="
    background-color: black;
">
     <!-- Left navbar links -->
     <ul class="navbar-nav">
         <li class="nav-item">
             <a class="nav-link" data-widget="pushmenu" href="#" role="button" style="color: white;"><i
                     class="fas fa-bars"></i></a>
         </li>
         <li class="nav-item d-none d-sm-inline-block">
             <a href="home" style="color: white;" class="nav-link">Inicio</a>
         </li>

     </ul>

     <!-- SEARCH FORM -->
     <form action="{{ route('lrshow') }}" method="POST" class="form-inline ml-3">
        {{ csrf_field() }}
        <div class="input-group input-group-sm">
            <input type="search" name="nombre" value="" class="form-control form-control-sm"
             placeholder="Nombres Completos">
        </div>
        <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </form>

 </nav>
