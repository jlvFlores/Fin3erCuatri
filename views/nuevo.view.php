<?php require 'headA.php'; ?>
    <title>Agregar articulo</title>
</head>
<body>
    <div class="cont">
        <div class="post">
            <article>
                <h2 class="titulo">Nuevo articulo</h2>
                <form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                    <input type="text" name="titulo" placeholder="Titulo del Articulo">
                    <input type="text" name="extracto" placeholder="Extracto del Articulo">
                    <textarea name="texto" placeholder="Texto del Articulo"></textarea>
                    <input type="file" name="thumb">
                    <input type="submit" value="Crear Articulo">           
                </form>
            </article>
        </div>
    </div>

<?php require 'footerA.php';?>