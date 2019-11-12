<?php
    Class Usuario{
        private $nome;
        private $senha;
        private $email;
        private $id;

    public function __construct($nome, $senha, $email){
        $this->nome = $nome;
        $this->senha = $senha;
        $this->email = $email;
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getId(){
        return $this->id;
    }

    };
?>