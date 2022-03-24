<?php
    require_once 'views/modulos/header.php';
		
		//-- Contenido --
			if(isset($_GET['ruta'])){

				if($_GET['ruta'] == "inicio" ||
					$_GET['ruta'] == "contactanos" ||
					$_GET['ruta'] == "lacarta" ||
					$_GET['ruta'] == "compras" ||
					$_GET['ruta'] == "nosotros"){
					include_once "views/modulos/".$_GET['ruta'].".php";
				}
				else{
					include_once "views/modulos/404.php";
				}
			}
			else{
				include_once "views/modulos/inicio.php";
			}

		
		require_once 'views/modulos/footer.php';