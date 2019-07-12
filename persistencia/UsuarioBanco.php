<?php
require_once("../modelo/Usuario.php");
class UsuarioBanco{


    public static function autenticar($email,$senha){
       
        $conexao = new PDO("mysql:host=localhost;dbname=banco_usuario;port=3307","root","");
        $sql = "select * from Usuario where email='$email' and senha='$senha' ";
        $acao = $conexao->prepare($sql);
        $acao->execute();

        if( $obj = $acao->fetchObject()){
            return new Usuario($obj->nome,$obj->senha,$obj->email,$obj->nivel);
        }

        return null;

}
}
?>