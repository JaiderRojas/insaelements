
<aside class="main-sidebar sidebar-orange-secondary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{ asset('elements/imagines/sena.jpg') }}" alt="" class="brand-image  elevation-2">
      <span style="color: black;">INSA-ELEMENTS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('elements/imagines/logo.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" style="color: black; "class="d-block">Bienvenidos</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav  nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt" style="color: orange;"></i>
              <p style="color: black;">
               Categorias
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="SolicitarPrestamo" class="nav-link active">
                  <i class="fas fa-file-alt" style="color:orange;"></i>
                  <p style="color: black;" >Solicitar Prestamo</p>
                </a>
              </li>

            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="AutorizaSolicitud" class="nav-link active">
                  <i class="fas fa-file-alt" style="color:orange;"></i>
                  <p style="color: black;" >Autorizacion Solicitud</p>
                </a>
              </li>

            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
