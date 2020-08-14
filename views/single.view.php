<?php require 'head.php'; ?>
    <title><?php echo $post['nombre']; ?></title>
</head>
<body>
    <div class="cont">
        <div class="post">
            <article>
                <h2 class="titulo"><?php echo $post['nombre']; ?></h2>
                <div class="thumb">
                    <img src="<?php echo RUTA; ?>/img/<?php echo $post['thumb']; ?>" 
                    alt="<?php echo $post['nombre']; ?>">
                </div>
                <p class="info">Cantidad Disponible: <?php echo $post['cantidad']; ?> (Pz)</p>
                <p class="info">Precio: <?php echo $post['precio']; ?> (MXN)</p>
                <p class="desc"><?php echo nl2br($post['texto']); ?></p>

                <a href="javaSend.php" class="btn">Añadir a carro</a>
                <a href="pedidos.php" class="btn">Comprar Ahorra</a>
            </article>
        </div>
    </div>

<?php require 'footer.php'; ?>