<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/pedidos.js" async></script>
    <title>Pedidos</title>
</head>
<body>
    <header>
        <div class="cont">
            <nav class="menu">
            <!-- <form name="busqueda" class="buscar" action=" < ?php echo RUTA; ?>" method="get">
                    <input type="text" name="busqueda" placeholder="Buscar">
                    <button type="submit" class="icono fa fa-search"></button>
                </form> -->
                <a href="galeria.php">Seguir Comprando</a>
                <a href="admin/cerrar.php">Cerrar Sesion</a>
            </nav>
            <div class="texto">
                <h1 class="nombre">Carrito</h1>
                <h3>Aqui esta la lista de todos los articulos pedidos</h3>
            </div>
        </div>
    </header>

    <section class="container content-section">
        <h2 class="section-header">CART</h2>
        <div class="cart-row">
            <span class="cart-item cart-header cart-column">ITEM</span>
            <span class="cart-price cart-header cart-column">PRICE</span>
            <span class="cart-quantity cart-header cart-column">QUANTITY</span>
        </div>
        <div class="cart-items">
        </div>
        <div class="cart-total">
            <strong class="cart-total-title">Total</strong>
            <span class="cart-total-price">$0</span>
        </div>
        <button class="btn btn-primary btn-purchase" type="button">Comprar Ahorra</button>
    </section>
        
    <footer>
        <div class="cont">
            <div class="copyright">
            <p>Luism20 de CSA y tijereros afiliados de CSA</p>
            </div>
        </div>
    </footer>
</body>
</html>