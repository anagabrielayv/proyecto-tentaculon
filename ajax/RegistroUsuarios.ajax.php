<?php
//SECCION DE EJEMPLO AJAX PARA REGISTRO
//CADA CONTROLADOR Y MODELO TIENE QUE ESTAR REGISTRADO LA RUTA DE UBICACION EN EL ARCHIVO 'INDEX.PHP'
require_once "../controller/Usuarios.controller.php";
require_once '../model/Usuarios.model.php';

class registrousuarioajax
{
    public function ajaxregistroUsuario()
    {
        if (isset($_POST['email'])) { //EVALUA SI LA VARIABLE CORREO ESTÁ DEFINIDA
            //preg_match SIRVE PARA QUE SE LEA SOLO CARÁCTERES LETRAS 
            if (preg_match('/[a-zA-Z\sñÑáéíóúÁÉÍÓÚ]+$/', $_POST['nombrecompleto']) && $_POST['nombrecompleto'] != null && $_POST['email'] != null && $_POST['contrasena'] != null && $_POST['confcontrasena'] != null && $_POST['rol'] != null) {
                //EN LA LINEA 13 DEFINIMOS LAS VARIABLES INPUT DEL FORMULARIO SI SON DIFERENTES A VACIOS YA QUE  NO QUEREMOS QUE AGREGUE DATOS VACIOS
                if ($_POST['contrasena'] == $_POST['confcontrasena']) { //SECCION DONDE SE VERIFICA SI LAS CONTRASEÑAS SON IGUALES
                    $tabla = "administradores"; //SE DESCRIBE EL NOMBRE DE LA TABLA DE LS BD AL QUE SE VA USAR
                    $id_estado = 1;

                    /*Inicio para guardar imagenes */
                    if ($_FILES["fotoimagen"]["name"] == "") {
                        $logo = 'views/images/foto-por-defecto.png';
                    } else if (isset($_FILES['fotoimagen'])) {
                        $file = $_FILES['fotoimagen'];
                        $filename = $file['name'];
                        $mimetype = $file['type'];

                        if ($mimetype == "image/jpg" || $mimetype == 'image/jpeg' || $mimetype == 'image/png' || $mimetype == 'image/gif') {

                            move_uploaded_file($file['tmp_name'], '../views/images/' . $filename);
                            $logo = 'views/images/' . $filename;
                        }
                    }
                     /*fin para guardar imagenes */

                    $datos = array( //SE GENERA UN ARRYA PARA GUARDAR TODOS LOS CAMPOS DEL INPUT
                        "nombrecompleto" => $_POST['nombrecompleto'],
                        "usuario" => $_POST['email'],
                        "password" => $_POST['contrasena'],
                        "ruta_foto_perfil" => $logo,
                        "id_rol" => $_POST['rol'],                        
                        "id_estado" => $id_estado
                    );

                    $respuesta = usuariocontrolador::ctrRegistrarUsuario($tabla, $datos); //LOS VALORES DE $tabla Y $datos SE LO MANDAMOS AL CONSTRUCTOR
                    if ($respuesta == "ok") { //SI SE GUARDA LA RESPUESTA RETORNA OK DEL MODELO
                        $response = array( // SE USARA UN ARRAY PARA LA RESPUESTA
                            'response' => 'true'
                        );
                    } else {
                        if ($respuesta == "repeat") {
                            $response = array(
                                'response' => 'repeat'
                            );
                        }
                    }
                } else {
                    $response = array(
                        'response' => 'no iguales'
                    );
                }
            }
            echo json_encode($response);//LA RESPUESTA EN ARRAY LO TRANSFORMAMOS EN JSON, PARA LUEGO HACER USO EN EL AJAXusuario.js
        }
    }
}

$resp = new registrousuarioajax();
$resp->ajaxregistroUsuario();

