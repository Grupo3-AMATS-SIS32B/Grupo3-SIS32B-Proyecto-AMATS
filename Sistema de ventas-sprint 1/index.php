<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de ventas</title>
    <link rel="stylesheet" href="css/estilos.css">
    <script src="vendor/js/jquery/jquery.js"></script>
</head>
<body>
    <header>
        <nav class="menu">
            <div class="encabezado-menu">
                <a class="logo-menu" href="index.php">
                    <span>Sistema de ventas</span>
                </a>
            </div>
            <div class="cuerpo-menu">
                <a href="javascript:void(0)" class="icono-menu">
                    <i class="ti-menu"></i>
                </a>
                <div class="menu-usuario">
                    <a href="javascript:void(0)" class="palanca-menu">
                        <img src="images/usuario.jpg" alt="fotografia-usuario">
                    </a>
                    <div class="menu-desplegable animated zoomIn">
                        <span><a href="#"><i class="ti-user"></i> Perfil</a></span>
                        <span><a href="#"><i class="fa fa-power-off"></i> Cerrar sesion</a></span>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <aside>
        <nav class="menu-lateral">
            <ul>
                <li class="separador"></li>
                <li class="titulo">INICIO</li>
                <li> <a href="javascript:void(0)"><i class="icono-izquierda fa fa-tachometer"></i>Dashboard<i class="activo icono-derecha fa fa-angle-down"></i> </a>
                    <ul>
                        <li><a href="index.php">Inicio</a></li>
                    </ul>
                </li>
                <li class="titulo">MANTENIMIENTO</li>
                <li> <a href="clientes.php"><i class="icono-izquierda fa fa-user"></i>Clientes</a></li>
                <li> <a href="javascript:void(0)"><i class="icono-izquierda fa fa-building"></i>Empleados<i class="icono-derecha fa fa-angle-down"></i><span class="label bg-info pull-right">2</span></a>
                    <ul>
                        <li><a href="empleados.php">Empleados</a></li> 
                        <li><a href="cargos.php">Cargos</a></li>
                    </ul>
                </li>
                <li> <a href="usuarios.php"><i class="icono-izquierda fa fa-users"></i>Usuarios</a></li>
                <li> <a href="javascript:void(0)"> <i class="icono-izquierda fa fa-archive"></i>Productos<i class="icono-derecha fa fa-angle-down"></i><span class="label bg-danger pull-right">2</span></a>
                    <ul>
                        <li><a href="productos.php">Productos</a></li>
                        <li><a href="categorias.php">Categorias</a></li>
                    </ul>
                </li>
                <li class="titulo">COMPRAS</li>
                <li> <a href="javascript:void(0)"> <i class="icono-izquierda fa fa-shopping-bag"></i>Compras<i class="icono-derecha fa fa-angle-down"></i><span class="label bg-warning pull-right">3</span></a>
                    <ul>
                        <li><a href="ingreso.php">Ingreso</a></li>
                        <li><a href="compras.php">Compras</a></li>
                        <li><a href="proveedores.php">Proveedores</a></li>
                    </ul>
                </li>
                <li class="titulo">VENTAS</li>
                <li> <a href="javascript:void(0)"> <i class="icono-izquierda fa fa-shopping-cart"></i>Ventas<i class="icono-derecha fa fa-angle-down"></i><span class="label bg-success pull-right">2</span></a>
                    <ul>
                        <li><a href="realizar-venta.php">Realizar venta</a></li>
                        <li><a href="ventas.php">Ventas</a></li>
                    </ul>
                </li>
                <li class="titulo">REPORTES</li>
                <li> <a href="javascript:void(0)"> <i class="icono-izquierda fa fa-book"></i>Vistas<i class="icono-derecha fa fa-angle-down"></i></a>
                    <ul>
                        <li><a href="reportes.php">Reporte general</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </aside>

    <section>
        <div class="titulo">
            <div class="cabecera">
                <h3>Inicio</h3> 
            </div>
            <div class="cuerpo">
                <span>Inicio</span> <i class="ti-angle-right"></i> <span>Dashboard</span>
            </div>
        </div>

        <div class="informacion container">
            <div class="graficas row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Ventas</h4>
                            <div id="morris-area-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Ganancias</h4>
                            <div id="morris-area-chart2"></div>
                        </div>
                    </div>
                </div>
            </div>                    
        </div>
    </section>

</body>
<script src="js/main.js"></script>
</html>