<?php require 'headA.php'; ?>
    <title>Agregar articulo</title>
</head>
<body>
    <div class="cont">
        <div class="post">
            <article>
                <h2 class="titulo">Nuevo articulo</h2>
                <form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                    <input type="text" name="nombre" placeholder="Nombre del Articulo">
                    <input type="number" name="cantidad" min="1" placeholder="Cantidad disponible">
                    <input type="number" name="precio" placeholder="Precio ej.(55.50)">
                    <textarea name="texto" placeholder="Descripcion del Articulo"></textarea>
                    <input type="file" name="thumb">
                    <input type="submit" value="Agregar Articulo">
                </form>
            </article>
        </div>
    </div>

<?php require 'footerA.php';?>