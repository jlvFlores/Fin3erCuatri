<?php require 'headA.php'; ?>
<title>Admin</title>
</head>
<body>
    <header>
        <div class="cont">
            <nav class="menu">
                <form name="busqueda" class="buscar" action="<?php echo RUTA; ?>/buscar.php" method="get">
                    <input type="text" name="busqueda" placeholder="Buscar">
                    <button type="submit" class="icono fa fa-search"></button>
                </form>    
                <a href="nuevo.php">Nuevo Articulo</a>
                <a href="cerrar.php">Cerrar Sesion</a>
            </nav>

            <div class="texto">
                <h1 class="nombre"><span>Bienvenido </span>ADMIN</h1>
                <h3>La entrada fue un exito</h3>
            </div>
        </div>
    </header>

    <div class="cont">
        <h2>panel de control</h2>
        <?php foreach($posts as $post): ?>
            <div class="post">
                <article>
                    <h2 class="nombre"><?php echo $post['id'] . '.-' . $post['nombre']; ?></h2>
                    <a href="editar.php?id=<?php echo $post['id']; ?>">Editar</a>
                    <a href="../single.php?id=<?php echo $post['id']; ?>">Ver</a>
                    <a href="borrar.php?id=<?php echo $post['id']; ?>">Borrar</a>
                </article>
            </div>
        <?php endforeach; ?>
    </div>
    <!-- agregar las opciones para 
    añadir y borrar articulos-->

<?php require 'footerA.php'; ?>