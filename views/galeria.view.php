<?php require 'head.php'; ?>
<title>Galeria</title>
</head>
<body>
    <header>
        <div class="cont">
            <nav class="menu">
                <!--
                <form name="busqueda" class="buscar" action=" < ?php echo RUTA; ?>" method="get">
                    <input type="text" name="busqueda" placeholder="Buscar">
                    <button type="submit" class="icono fa fa-search"></button>
                </form>
                -->

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
        <?php foreach($posts as $post): ?>
            <div class="foto">
                <a href="single.php?id=<?php echo $post['id']; ?>">
                    <img src="img/<?php echo $post['thumb']; ?>" alt="no disponible">                         
                </a>
            </div>
        <?php endforeach; ?>
        </section>
    </section>

<?php require 'footer.php'; ?>