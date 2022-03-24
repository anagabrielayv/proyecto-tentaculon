<section id="menu-list">
    <div class="vista-inicio">
        <div class="">
            <img src="views/images/cabezapulpo.png" class="img-cabeza-mv position-absolute" alt="El Tentaculón">
        </div>
        <img src="views/images/tentaculomovil-sup.png" class="img-tent-mv-sup" alt="El Tentaculón">
        <div class="contenido-diseño-computadora position-relative">
            <img src="views/images/cabezapulpo.png" class="img-cabeza" alt="El Tentaculón">
            <div class="row px-5 diseño-computadora">
                <img src="views/images/tentaculosuperior.png" width="460px" class="tentaculosuperior position-absolute"
                    alt="El Tentaculón">
                <?php include_once "menu.php" ?>
                <!--IMAGEN PORTADA -->
                <div class="container-fluid px-0 cuerpo-inicio">
                    <div class="contenedor-imagenes">
                        <img src="views/images/tentaculoinferior.png" class="tentaculoinferior" alt="El Tentaculón">
                    </div>

                    <div class="contenedor-compras">
                        <div class="contenedor-fondo-blanco">
                            <div class="Compras-titulo-menu">
                                <h1>TU PEDIDO</h1>
                            </div>
                            <div class="Compras-listado-menu">
                                <table class="todo-elmenu">
                                    <tr>
                                        <td> Platos </td>
                                        <td> Cantidad </td>
                                        <td> Precio </td>
                                        <td> Subtotal </td>
                                    </tr>
                                </table>
                            </div>

                            <div>
                                <a class="Regresar-comprar" type="button" class="nav-link" href="lacarta">Regresar a
                                    comprar</a>
                                <input class="Pedido-comprar" type="button" data-toggle="modal" data-target="#mdlPedido"
                                    value="Pedir">
                            </div>
                        </div>
                        <a href="https://wa.me/51996163415?text=Quiero%20realizar%20un%20mi%20pedido" target="_blank"
                            class="btn-whatsapp">
                            <img src="views/images/whatsapp.png" class="boton-whatsapp" alt="El Tentaculón">
                        </a>
                    </div>
                </div>
            </div>
        </div>
</section>