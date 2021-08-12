<aside class="main-sidebar sidebar-white-primary elevation-4">
    <!-- Brand Logo -->
    <a href="home" class="brand-link">
      <img src="{{ asset('elements/imagines/sena.jpg') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span style="color: black;">INSA-ELEMENTS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active" style="background-color: orange;">
              <i class="  nav-icon fas fa-tachometer-alt"></i>
              <p style="color:black;">
                Panel de Control
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="RegistroPrestamo"  class="nav-link">
                  <i class="fas fa-clipboard" style="color: orange;"></i>
                  <p style="color:black">Registro de Prestamo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Devolucion" class="nav-link ">
                  <i class="far fa-thumbs-up" style="color: orange;"></i>
                  <p style="color:black">Devoluciones</p>
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
