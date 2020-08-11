<?php require 'head.php'; ?>
<title>Galeria</title>
</head>
<body>
    <header>
        <div class="cont">
            <nav class="menu">
                <form name="busqueda" class="buscar" action="<?php echo RUTA; ?>/buscar.php" method="get">
                    <input type="text" name="busqueda" placeholder="Buscar">
                    <button type="submit" class="icono fa fa-search"></button>
                </form>
                <!--añadir una ventana de busqueda-->
                <a href="contenido.php">Inicio</a>
                <a href="pedidos.php">Pedidos</a>
                <!--cambiar pedidos.php con js para abrir una ventana, 
                sin importar en que pagina esta el usuario-->
                <a href="admin/cerrar.php">Cerrar Sesion</a>
            </nav>
            <div class="texto">
                <h1 class="nombre">Galeria <span>de Luism20</span></h1>
                <h3>Bienvenido a la galería, haz clic en los articulos que deseas ver</h3>
            </div>
        </div>
    </header>

    <section class="main">
        <section class="galeria">
            <div class="foto">
                <img src="img/01.jpg" alt="">
            </div>
            <div class="foto">
                <img src="img/02.jpg" alt="">
            </div>
            <div class="foto">
                <img src="img/03.jpg" alt="">
            </div>
            <div class="foto">
                <img src="img/04.jpg" alt="">
            </div>
            <div class="foto">
                <img src="img/05.jpg" alt="">
            </div>
            <div class="foto">
                <img src="img/06.jpg" alt="">
            </div>
            <div class="foto">
                <img src="img/07.jpg" alt="">
            </div>
            <div class="foto">
                <img src="img/08.jpg" alt="">
            </div>
            <div class="foto">
                <img src="img/09.jpg" alt="">
            </div>
            <div class="foto">
                <img src="img/10.jpg" alt="">
            </div>
            <div class="foto">
                <img src="img/11.jpg" alt="">
            </div>
            <div class="foto">
                <img src="img/12.jpg" alt="">
            </div>
            <div class="foto">
                <img src="img/13.jpg" alt="">
            </div>
            <div class="foto">
                <img src="img/14.jpg" alt="">
            </div>
            <div class="foto">
                <img src="img/15.jpg" alt="">
            </div>
            <div class="foto">
                <img src="img/16.jpg" alt="">
            </div>
            <div class="foto">
                <img src="img/17.jpg" alt="">
            </div>
            <div class="foto">
                <img src="img/18.jpg" alt="">
            </div>
            <div class="foto">
                <img src="img/19.jpg" alt="">
            </div>
            <div class="foto">
                <img src="img/20.jpg" alt="">
            </div>
        </section>
    </section>

<?php require 'footer.php'; ?>