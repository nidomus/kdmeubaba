<?php
require_once("../modelo/Usuario.php");
class UsuarioBanco{


    public static function autenticar($email,$senha){
       
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco_usuario;port=3306","root","");
        $sql = "select * from Usuario where email='$email' and senha='$senha' ";
        $acao = $conexao->prepare($sql);
        $acao->execute();

        if( $obj = $acao->fetchObject()){
            return new Usuario($obj->nome,$obj->senha,$obj->email,$obj->nivel);
        }

        return null;

}

public static function inserir($nome,$email,$senha){
       
    $conexao = new PDO("mysql:host=localhost;dbname=banco_usuario;port=3306","root","");
    $sql = "insert into Usuario (nome,email,senha,nivel) values ('$nome','$email','$senha', 2) ";
    $acao = $conexao->prepare($sql);
    $acao->execute();

    if( $obj = $acao->fetchObject()){
        return new Usuario($obj->nome, $obj->email, $obj->senha, "2");
    }

    return Null;
} 

public static function inserirPostagem($id_usuario,$txt){
       
    $conexao = new PDO("mysql:host=localhost;dbname=banco_usuario;port=3306","root","");
    $sql = "insert into Postagem (txt,id_usuario) values ('$txt','$id_usuario') ";
    $acao = $conexao->prepare($sql);
    $acao->execute();

    if( $obj = $acao->fetchObject()){
        return new Postagem($obj->txt, $obj->id_usuario);
    }

    return Null;
} 


}

?>