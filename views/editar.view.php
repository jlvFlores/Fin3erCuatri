<?php require 'headA.php'; ?>
    <title>Agregar articulo</title>
</head>
<body>
    <div class="cont">
        <div class="post">
            <article>
                <h2 class="titulo">Editar Articulo</h2>
                <form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                    <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
                    <input type="text" name="nombre" value="<?php echo $post['nombre']; ?>">
                    <input type="number" name="cantidad" value="<?php echo $post['cantidad']; ?>">
                    <input type="number" name="precio" value="<?php echo $post['precio']; ?>">
                    <textarea name="texto"><?php echo $post['texto']; ?></textarea>
                    <input type="file" name="thumb">
                    <input type="hidden" name="thumb-guardada" value="<?php echo $post['thumb']; ?>">
                    <input type="submit" value="Modificar Articulo">
                </form>
            </article>
        </div>
    </div>

<?php require 'footerA.php';?>