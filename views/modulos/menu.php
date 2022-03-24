<header class="container-fluid px-0 m-0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <nav class="navbar navbar-expand-lg navbar-inverse navbar-dark bg-white">

        <div class="container-fluid">
            <div class="navbar-brand">
                <img src="views/images/logo.jpeg" width="100%" height="100%" class="d-inline-block align-top tentaculon"
                    alt="El Tentaculón">
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation"
                style="background-color: #181c39;">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo02">
                <ul class="navbar-nav custom-menu mx-xl-3">
                    <li class="nav-item d-flex align-items-center">
                        <a class="nav-link active" href="inicio">Nosotros</a>
                    </li>
                    <li class="nav-item d-flex mx-xl-3 align-items-center">
                        <a class="nav-link" href="lacarta">La Carta</a>
                    </li>
                    <li class="nav-item d-flex mx-xl-3 align-items-center">
                        <a class="btn-abrir-popup" id="btn-abrir-popup">Delivery <i
                                class="fal fa-map-marker-alt"></i></a>
                    </li>

                    <li class="nav-item d-flex mx-xl-3 align-items-center">
                        <a class="nav-link" href="contactanos">Contáctanos </a>
                        <!--data-toggle="modal" data-target="#mdlPedido"-->
                    </li>

                    <li class="nav-item d-flex  align-items-center">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#mdlLogin">Entrar <img
                                src="views/images/entrar.png" height="17px" class="d-inline-block"></a>
                    </li>
                    <li class="nav-item d-flex mx-xl-3 align-items-center">
                        <a class="nav-link" href="compras">Compras</a>
                    </li>
                    <div class="redes-sociales">
                        <ul class="navbar-nav custom-menu m-auto">
                            <li class="nav-item d-flex align-items-center">
                                <a class="nav-link text-dark" href="#"><i class="fab fa-facebook"></i></a>
                            </li>
                            <li class="nav-item d-flex align-items-center ">
                                <a class="nav-link text-dark" href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </ul>
            </div>
    </nav>
</header>


<!-----------------------LOGIN/ESTEFANY------------------------------>
<section>
    <div class="modal" id="mdlLogin" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog-centered">
            <div class="modal-content-login">
                <div class="modal-header-login">
                    <div class="titlelogin">Login</div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="#">
                    <div class="modal-body-login">
                        <div class="input-box-login">
                            <input type="text" placeholder="Usuario" required>
                            <div class="icono"><i class="fas fa-user"></i></div>
                        </div>
                        <div class="input-box-login">
                            <input type="password" placeholder="Contraseña" id="myPass">
                            <div class="icono"><i class="fas fa-lock"></i></div>
                            <span class="eye" onclick="myFunction()">
                                <i id="hide1" class="fa fa-eye"></i>
                                <i id="hide2" class="fa fa-eye-slash"></i>
                            </span>
                            
                        </div>
                        <div class="option_div">
                            <div class="checklogin">
                                <input type="checkbox">
                                <span class="recuerdame">Recuerdame</span>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="button-login">
                                <input type="submit" value="Ingresar">
                            </div>

                            <div class="sign_up">
                                No es un miembro? <a data-toggle="modal" data-target="#mdlRegistro" href="#">Registrate
                                    ahora</a>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</section>


<!--REGISTAR CLIENTE-->
<section>
    <div class="modal" id="mdlRegistro" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog-centered">
            <div class="modal-content-registro">
                <div class="modal-header">
                    <div class="titleregistro">Registro</div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="#">
                    <div class="modal-body-registro">
                        <div class="input-box">
                            <span class="details">Nombre</span>
                            <input type="text" placeholder="Ingrese su nombre" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Apellidos</span>
                            <input type="text" placeholder="Ingrese su apellido" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Tipo de documento</span>
                            <select>
                                <option value="">Seleccione</option>
                                <option value="Masculino">DNI</option>
                                <option value="Femenino">Pasaporte</option>
                                <option value="Femenino">Otros</option>
                            </select>
                        </div>
                        <div class="input-box">
                            <span class="details">Numero de documento</span>
                            <input type="text" placeholder="" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Genero</span>
                            <select>
                                <option value="">Seleccione</option>
                                <option value="Masculino">Maculino</option>
                                <option value="Femenino">Femenino</option>
                            </select>
                        </div>
                        <div class="input-box">
                            <span class="details">Número de telefono</span>
                            <input type="text" placeholder="Ingrese su telefono" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Correo electronico</span>
                            <input type="text" placeholder="Ingrese su email" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Cumpleaños</span>
                            <input type="date" placeholder="dd/mm/aaaa" required>
                        </div>
                        <span class="pap">"Registrese
                            para
                            recibir noticias de El
                            Tentaculón"</span>

                        <div class="input-box">
                            <span class="details">Su contraseña</span>
                            <input placeholder="Ingrese su contraseña" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Confirme su contraseña</span>
                            <input placeholder="Confirme su contraseña" required>
                        </div>


                        <div class="gender-details">
                            <input type="radio" name="gender" id="dot-1">

                            <div class="category">
                                <label for="dot-1">
                                    <span class="dot one"></span>
                                    <span class="gender">Estoy de
                                        acuerdo
                                        con las condiciones de uso
                                        & politica de privacidad entiendo que mi
                                        información
                                        se
                                        usará como se describe en la página</span>
                                </label>
                            </div>
                        </div>
                        <div class="gender-details">
                            <input type="radio" name="gender" id="dot-2">

                            <div class="category">
                                <label for="dot-2">
                                    <span class="dot two"></span>
                                    <span class="gender">Autorizo
                                        el
                                        tratamiento de mis datos
                                        para fines de prospección y promoción
                                        comercial
                                        por parte
                                        de
                                        El Tentaculón y sus empresas
                                        vinculadas</span>
                                </label>
                            </div>
                            <div class="modal-footer">
                                <input type="submit" class="btn" value="Crear cuenta">
                                <br></br>
                                <input type="submit" class="btn" data-dismiss="modal" value="Cancelar">
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>

<!--REGISTAR pedido-->
<section>
    <div class="modal" id="mdlPedido" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog-centered">
            <div class="modal-content-pedido">
                <div class="modal-header">
                    <div class="titleregistro">FINALIZAR PEDIDO</div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="#">
                    <span class="pap2"> Mz. Lote 7,San Juan de Miraflores, Lima</span>
                    <span class="pap2">Duración de entrega: 40 min</span>
                    <span class="sub1"> ¿A QUIÉN ENTREGAMOS EL PEDIDO?</span>

                    <div class="modal-body-pedido">
                        <div class="input-box">
                            <span class="details">Nombre</span>
                            <input type="text" placeholder="Ingrese su nombre" required>
                        </div>

                        <div class="input-box">
                            <span class="details">Apellido</span>
                            <input type="text" placeholder="Ingrese su apellido" required>
                        </div>

                        <div class="input-box">
                            <span class="details">Móvil</span>
                            <input placeholder="Ingrese su apellido" required>
                        </div>

                        <div class="input-box">
                            <span class="details">Correo Electrónico</span>
                            <input type="text" placeholder="Ingrese su correo electrónico" required>
                        </div>

                        <span class="sub2"> LUGAR DE ENTREGA DEL PEDIDO</span>

                        <span class="pap3"> Entregando a: Mz. Lote7,San Juan de Miraflores, Lima</span>

                        <div class="input-box">
                            <span class="details">Detalle de su Ubicación</span>
                            <input type="text" placeholder="Ingrese su telefono" required>
                        </div>

                        <div class="input-box">
                            <span class="details">Referencia</span>
                            <input type="text" placeholder="Ingrese su email" required>
                        </div>
                        <div class="gender-details">
                            <input type="radio" name="gender" id="dot-3">

                            <div class="category">
                                <label for="dot-3">
                                    <span class="dot three"></span>
                                    <span class="gender">¿Desea boleta Electrónica?</span>
                                </label>
                            </div>
                        </div>
                        <div class="gender-details">
                            <input type="radio" name="gender" id="dot-4">

                            <div class="category">
                                <label for="dot-4">
                                    <span class="dot four"></span>
                                    <span class="gender">Necesito factura</span>
                                </label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btnpedido" value="Confirme su pedido">
                            <br></br>
                            <input type="submit" class="btnpedido" data-dismiss="modal" value="Cancelar">
                        </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="overlay" id="overlay">
        <div class="popup" id="popup">
            <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
            <h1>Como deseas tu pedido?</h1>
            <div>
                <input class="btn_traemelo" onclick="btn_traemelo();" type="submit" value="TRAEMELO">
                <input class="btn_recojo" onclick="btn_recojo();" type="submit" value="YO LO RECOJO">
            </div>
            <div>
                <img class="btn_traemelo" onclick="btn_traemelo();" src="views/img2/delivery.png">
                <img class="btn_recojo" onclick="btn_recojo();" src="views/img2/tienda.png">
            </div>
            <form action="">
                <div class="contenedor_inputs" id="contenedor_inputs" onclick="contenedor_inputs()">
                    <h2>Por favor ingresa tu dirección para validar el área de cobertura</h2>
                    <input class="ubication" type="text" placeholder="Ingresa tu dirección exacta">
                    <input type="submit" class="btn-submit_buscar" value="Buscar">
                </div>
                <div name="selectStoreSelector" class="store-control" id="store_control" onclick="store_control()">
                    <h2>Selecciona uno de nuestros locales</h2>
                    <select class="store-control-sede">
                        <option disabled="" selected="">Selecciona un Local</option>
                        <option value="1">Hernando de Lavalle 316 - SJM</option>
                        <option value="2">Mz A1 Lt 17 Sect. Alfonso Ugarte Pamplona Alta - SJM</option>
                    </select>
                </div>
                <input type="submit" class="btn-guardar" value="GUARDAR">
                <h3><img src="views/img2/reloj.png"></h3>
                <p>Le informamos que el tiempo de preparacion de los servicios de recojo y envio</p>
                <p>tendran una demora aproximada de 45 minutos, gracias.</p>
        </div>
    </div>
</section>