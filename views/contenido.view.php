<?php require 'head.php'; ?>
    <header>
        <div class="cont">
            <nav class="menu">
                <a href="#" id="btn-Ubicacion">Ubicacion</a>
                <a href="galeria.php">Galeria</a>
                <a href="cerrar.php">Cerrar Sesion</a>
            </nav>
            <div class="texto">
                <h1 class="nombre">ARTE <span>Luism20</span></h1>
                <h3>Este es una pagina de contacto y muestra de piezas en existencia dentro del negocio</h3>
            </div>
        </div>
    </header> 
    
    <section class="main">
        <section class="acerca-de">
            <div class="cont">
                <div class="foto">
                    <img src="img/header.jpg" alt="">
                </div>
                <article>
                    <h3>Acerca de</h3>
                    <p>En las secciones de la nueva empresa se pueden checar siertas caracteristicas en las piezas y demas productos 
                    </p>
                </article>
            </div>
        </section>
     
        <section class="menu">
            <div class="cont">
                <h3 class="titulo">Artesasanias</h3>
                <div class="cont-menu">
                    <div class="cont-menu2">
                        <article>
                            <p class="categoria">Normales</p>
                            <div class="pedido">
                                <p class="nombre">Salero de codornis</p>
                                <p class="precio"> $15 (MXN)</p>
                                <p class="desc">Salero sencillo </p>
                            </div>

                            <div class="pedido">
                                <p class="nombre">Cuerno de la abundancia </p>
                                <p class="precio"> $250 (MXN)</p>
                                <p class="desc">Cuerno de la abundancia con frutas incluidas</p>
                            </div>

                            <div class="pedido">
                                <p class="nombre">Maceta Kawai </p>
                                <p class="precio"> $45 (MXN)</p>
                                <p class="desc"> Maceta kawai con planta incluida 
                                </p>
                            </div>

                            <div class="pedido">
                                <p class="nombre">Ceralero y violetero </p>
                                <p class="precio"> $75 (MXN)</p>
                                <p class="desc">Violeto de 120ml y tason cerealero de 250 ml </p>
                            </div>
                        </article>

                        <article>
                            <p class="categoria">Especiales</p>
                            <div class="pedido">
                            <p class="nombre">Bota Florero</p>
                            <p class="precio"> $50 (MXN)</p>
                            <p class="desc">Echa para una boda especial
                            </p>
                            </div>

                            <div class="pedido">
                            <p class="nombre">Maceta </p>
                            <p class="precio"> $75 (MXN)</p>
                            <p class="desc">Hecha para poder poner plantas que no nesecitan tanta agua</p>
                            </div>

                            <div class="pedido">
                            <p class="nombre">Jarro para cafe</p>
                            <p class="precio"> $15 (MXN)</p>
                            <p class="desc">Jarro de color verde obscuro</p>
                            </div>

                            <div class="pedido">
                            <p class="nombre">Cervilletero Caballo</p>
                            <p class="precio"> $15 C/(MXN)</p>
                            <p class="desc">Cervillete con forma de caballo con espalte transparente sin plomo</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="galeria">
            <div class="foto">
                <a href="Galeria.html">
                    <img src="img/01.jpg" alt="">
                </a>
            </div>
            <div class="foto">
                <a href="Galeria.html">
                    <img src="img/02.jpg" alt="">
                </a>
            </div>
            <div class="foto">
                <a href="Galeria.html">
                    <img src="img/03.jpg" alt="">
                </a>
            </div>
            <div class="foto">
                <a href="Galeria.html">
                    <img src="img/04.jpg" alt="">
                </a>
            </div>
            <div class="foto">
                <a href="Galeria.html">
                    <img src="img/05.jpg" alt="">
                </a>
            </div>
            <div class="foto">
                <a href="Galeria.html">
                    <img src="img/06.jpg" alt="">
                </a>
            </div>
            <div class="foto">
                <a href="Galeria.html">
                    <img src="img/07.jpg" alt="">
                </a>
            </div>
            <div class="foto">
                <a href="Galeria.html">
                    <img src="img/08.jpg" alt="">
                </a>
            </div>
        </section>

       <section class="ubicacion" id="Ubicacion">
           <div class="cont">
               <h3 class="titulo">Ubicacion</h3>
               <div class="direccion">
                 <p class="calle">Mexico, Tlaxcala <br />La trinidad tenexyecac Av juarez num 77</p>
                 <p class="telefono">(+52)248-127-2112</p>
                 <p class="correo">luisjuares73[arroba]gmail.com</p>
               </div>
               <div class="horarios">
                   <h4>Horarios</h4>
                   <p class="entre-semana">Lunes / Viernes <br> 8:00 am - 10:00 pm</p>
                   <p class="fin-semana">Sabado / Domingo <br> 12:00 am - 7:00 pm</p>
               </div>
           </div>
       </section>

       <section class="mapa">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.8207168489225!2d-98.31812498461355!3d19.333584448848264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfd7824918e515%3A0xfa8ba4da81e20172!2sAv.%20Ju%C3%A1rez%2077%2C%20Tetlapa%2C%2090121%20La%20Trinidad%20Tenexyecac%2C%20Tlax.!5e0!3m2!1ses-419!2smx!4v1591761141325!5m2!1ses-419!2smx" width="1900" height="550" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
       </section>
    </section>

<?php require 'footer.php'; ?>