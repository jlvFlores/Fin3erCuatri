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
                <p class="info">Cantidad Disponible: <?php echo $post['cantidad']; ?></p>
                <p class="info">Precio: <?php echo $post['precio']; ?></p>
                <p class="desc"><?php echo nl2br($post['texto']); ?></p>

                <a href="javaSend.php" class="btn">Añadir a carro</a>
                <a href="pedidos.php" class="btn">Comprar Ahorra</a>
            </article>
        </div>
    </div>
    <section class="cont content-section">
        <h2 class="section-header">MUSIC</h2>
        <div class="shop-items">
            <div class="shop-item">
                <span class="shop-item-title">Album 1</span>
                <img class="shop-item-image" src="Images/Album 1.png">
                <div class="shop-item-details">
                    <span class="shop-item-price">$12.99</span>
                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                </div>
            </div>
            <div class="shop-item">
                <span class="shop-item-title">Album 2</span>
                <img class="shop-item-image" src="Images/Album 2.png">
                <div class="shop-item-details">
                    <span class="shop-item-price">$14.99</span>
                    <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                </div>
            </div>
            <div class="shop-item">
                <span class="shop-item-title">Album 3</span>
                <img class="shop-item-image" src="Images/Album 3.png">
                <div class="shop-item-details">
                    <span class="shop-item-price">$9.99</span>
                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                </div>
            </div>
            <div class="shop-item">
                <span class="shop-item-title">Album 4</span>
                <img class="shop-item-image" src="Images/Album 4.png">
                <div class="shop-item-details">
                    <span class="shop-item-price">$19.99</span>
                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                </div>
            </div>
        </div>
    </section>

<?php require 'footer.php'; ?>