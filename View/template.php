


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <!-- aqui el headdeeer   -->

<div class="wrapper">

  <!-- Navbar navegador  en top  -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
      <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="#" class="dropdown-item">USUARIO <?php echo $_SESSION['nombre'];?> </a></li>
              <li><a href="../Controller/salir.php" class="dropdown-item">SALIR</a></li>

              <li class="dropdown-divider"></li>

              <!-- Level two dropdown-->
          
              <!-- End Level two -->
            </ul>
          </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-6">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="../View/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">FACEBOL.SRL</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../View/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block" ><?php echo $_SESSION['nombre'];?>  </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
 <!--      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        
              <!-- menus  de  opciones  Computacion -->
          <!-- CARGOS -->
          <li class="nav-item">
            <a href="#" class="nav-link">
           
            <i class='fa fa-user-circle'></i>
              <p>
              CARGO 
             
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../Controller/cargoRegistro.php" class="nav-link">
                <i class='fa fa-plus-square'></i>
                  <p>Registrar Cargo </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Controller/cargoLista.php" class="nav-link">
                <i class='fa fa-table'></i>
                  <p>Listar Cargo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Controller/cargoBusqueda.php" class="nav-link">
                <i class='fa fa-binoculars'></i>
                  <p>Buscar Cargo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../fpdf/reporte_cargo.php" class="nav-link">
                <i class='fa fa-folder-open'></i>
                  <p>Reporte </p>
                </a>
              </li>
              
            </ul>
          </li>
           <!-- USUARIOS  -->
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class='fa fa-users'></i>
              <p>
              USUARIOS
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../Controller/usuarioRegistro.php" class="nav-link">
                <i class='fa fa-plus-square'></i>
                  <p>Registrar Usuario  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Controller/usuarioLista.php" class="nav-link">
                <i class='fa fa-table'></i>
                  <p>Listar Usuario </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Controller/usuarioListaINAC.php" class="nav-link">
                <i class='fa fa-table'></i>
                  <p>Listar Usuario INACTIVOS </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Controller/usuarioBuscar.php" class="nav-link">
                <i class='fa fa-binoculars'></i>
                  <p>Buscar Usuario </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../fpdf/reporte_usuario.php" class="nav-link">
                <i class='fa fa-folder-open'></i>
                  <p>Reporte </p>
                </a>
              </li>
              
            </ul>
          </li>
  <!-- EMPLEADOS  -->
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class='fa fa-male'></i>
              <p>
              Empleado 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../Controller/empleadoRegistro.php" class="nav-link">
                <i class='fa fa-plus-square'></i>
                  <p>Registrar Empleado  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Controller/empleadoLista.php" class="nav-link">
                <i class='fa fa-table'></i>
                  <p>Listar Empleado </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Controller/empleadoBusqueda.php" class="nav-link">
                <i class='fa fa-binoculars'></i>
                  <p>Buscar Empleado </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../fpdf/reporte_empleado.php" class="nav-link">
                <i class='fa fa-folder-open'></i>
                  <p>Reporte </p>
                </a>
              </li>
              
            </ul>
          </li>
            <!-- PROVEEDOR  -->
            <li class="nav-item">
            <a href="#" class="nav-link">
            <i class='fa fa-truck'></i>
              <p>
             Proveedor
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../Controller/provedorRegistro.php" class="nav-link">
                <i class='fa fa-plus-square'></i>
                  <p>Registrar Proveedor </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Controller/provedorLista.php" class="nav-link">
                <i class='fa fa-table'></i>
                  <p>Listar Proveedor </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Controller/proveedorBusqueda.php" class="nav-link">
                <i class='fa fa-binoculars'></i>
                  <p>Buscar Proveedores </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../fpdf/reporte_proveedor.php" class="nav-link">
                <i class='fa fa-folder-open'></i>
                  <p>Reporte </p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class='fas fa-grin-alt'></i>
              <p>
            Cliente
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../Controller/clienteRegistro.php" class="nav-link">
                <i class='fa fa-plus-square'></i>
                  <p>Registrar Cliente </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Controller/clienteLista.php" class="nav-link">
                <i class='fa fa-table'></i>
                  <p>Listar Cliente </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Controller/clienteBusqueda.php" class="nav-link">
                <i class='fa fa-binoculars'></i>
                  <p>Buscar Cliente </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../fpdf/reporte_cliente.php" class="nav-link">
                <i class='fa fa-folder-open'></i>
                  <p>Reporte </p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
             Producto
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../Controller/productoRegistro.php" class="nav-link">
                  <i class="fa fa-car nav-icon"></i>
                  <p>Registrar Producto </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Controller/productoLista.php" class="nav-link">
                  <i class="fa fa-table"></i>
                  <p>Listar Producto </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Controller/productoLista2.php" class="nav-link">
                  <i class="fa fa-table"></i>
                  <p>Listar Producto2 </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Controller/productoLista3.php" class="nav-link">
                  <i class="fa fa-table"></i>
                  <p>Listar Producto3 </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Controller/productoBusqueda.php" class="nav-link">
                  <i class="fa fa-binoculars"></i>
                  <p>Buscar Producto </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../fpdf/reporte_producto.php" class="nav-link">
                <i class='fa fa-folder-open'></i>
                  <p>Reporte </p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class='fas fa-grin-alt'></i>
              <p>
          VENTA
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../Controller/ventaRegistro.php" class="nav-link">
                <i class='fa fa-plus-square'></i>
                  <p>Registrar Venta </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Controller/ventaLista.php" class="nav-link">
                <i class='fa fa-table'></i>
                  <p>Listar Venta </p>
                </a>
              </li>
         
              <li class="nav-item">
                <a href="../fpdf/reporte_venta.php" class="nav-link">
                <i class='fa fa-folder-open'></i>
                  <p>Reporte </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../fpdf/reporte_ventaFactura.php" class="nav-link">
                <i class='fa fa-folder-open'></i>
                  <p>Reporte FACTURA</p>
                </a>
              </li>
              
            </ul>
          </li>
         
            </ul>
          </li>
         
         
         
        </ul>
      </nav>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content    contenido  de TABALAS Y FORM -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        
        <!-- /.row -->
   <!-- aqui el foooter inicio  -->
   
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
