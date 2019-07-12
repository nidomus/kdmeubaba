<?php

class Usuario
{

    public $nome;
    public $senha;
    public $email;
    public $nivel;


    public function __construct($nome, $senha, $email, $nivel)
    {

        $this->nome = $nome;
        $this->senha = $senha;
        $this->email = $email;
        $this->nivel = $nivel;
    }
    public function getNome()
    {
        return $this->nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function getNivel()
    {
        return $this->nivel;
    }
}
