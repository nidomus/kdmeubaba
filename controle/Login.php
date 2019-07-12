
<?php

require_once("../modelo/Usuario.php");
require_once("../persistencia/UsuarioBanco.php");


$email = $_POST["email"];
$senha = $_POST["senha"];

$usuario = UsuarioBanco::autenticar($email, $senha);

if ($usuario != NULL) {

    session_start();
    $_SESSION["usuario"] = serialize($usuario);
    /*
    date_default_timezone_set('America/Sao_Paulo');
    $hora= date('H:i');
    $_SESSION["horario"]= $hora;
    */
} else {
    session_start();
    $_SESSION["msg"] = "Usuario inexistente";
}

header("location: ../index.php");
?>