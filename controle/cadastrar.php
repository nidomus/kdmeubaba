<?php

require_once("../modelo/Usuario.php");
require_once("../persistencia/UsuarioBanco.php");

$nome =$_POST["nome"];
$email =$_POST["email"];
$senha =$_POST["senha"];
$usuario =UsuarioBanco::inserir($nome,$email,$senha);

if($usuario != NULL){
    session_start();
    $_SESSION["usuario"]= serialize($usuario);
    header("location: visao/index.php");
}else{
    header("location: ../login.php");
 
}
header("location: ../login.php");


?>