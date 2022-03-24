<?php
session_start();
require_once "../../controller/Usuarios.controller.php";
require_once '../../model/Usuarios.model.php';

class loginusuariosajax
{
    public function ajaxloginUsuario()
    {
        if (isset($_POST['emailuser']) && isset($_POST['password'])) {
            if ($_POST['emailuser'] != null && $_POST['password'] != null) {
                $tabla = "administradores";
                $usuario = $_POST['emailuser'];
                $clave = $_POST['password'];
                $respuesta = usuariocontrolador::ctrloginUsuario($tabla, $usuario, $clave);

                if ($respuesta == 0) {
                    $response = array(
                        'response' => 'error'
                    );
                } else {
                    if ($respuesta['id_estado'] != 1) {
                        $response = array(
                            'response' => 'invalidado'
                        );
                    } else {
                        if ($respuesta['usuario'] == $usuario && $respuesta['password'] == $clave) {
                            $_SESSION['iniciarSesion'] = 'ok';
                            $_SESSION['id_administrador'] = $respuesta['id_administrador'];
                            $_SESSION['nombrecompleto'] = $respuesta['nombrecompleto'];
                            $_SESSION['usuario'] = $respuesta['usuario'];
                            $_SESSION['password'] = $respuesta['password'];
                            $_SESSION['id_rol'] = $respuesta['id_rol'];
                            $_SESSION['ruta_foto_perfil'] = $respuesta['ruta_foto_perfil'];
                            $_SESSION['id_estado'] = $respuesta['id_estado'];

                            $response = array(
                                'response' => 'ok'
                            );
                        }
                    }
                }
            }
        }
        echo json_encode($response);
    }
}

$resp = new loginusuariosajax();
$resp->ajaxloginUsuario();
