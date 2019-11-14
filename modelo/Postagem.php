<?php

class Postagem
{

    public $id_usuario;
    public $senha;



    public function __construct($id_usuario,$txt)
    {
        $conexao = new PDO("mysql:host=localhost;dbname=banco_usuario;port=3306","root","");
        $sql = "select nome from usuario where id='$id_usuario'";
        $acao = $conexao->prepare($sql);
        $acao->execute();
        $nome=$acao;

        $this->nome = $nome;
        $this->senha = $txt;

    }
    public function getTxt()
    {
        return $this->txt;
    }

    public function getNome()
    {
        return $this->nome;
    }

    
}
