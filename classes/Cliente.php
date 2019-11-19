<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cliente
 *
 * @author david
 */
class Cliente {
    //put your code here
    private $nome;
    private $cpf;
    private $dataNascimento;
    private $email;
    private $telefone1;
    private $telefone2;
    private $rua;
    private $cep;
    private $bairro;
    private $cidade;
    private $estado;
    private $numero;
    private $id;
    
    function __construct($nome, $cpf, $dataNascimento, $email, $telefone1, $telefone2, $rua, $cep, $bairro, $cidade, $estado, $numero) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->dataNascimento = $dataNascimento;
        $this->email = $email;
        $this->telefone1 = $telefone1;
        $this->telefone2 = $telefone2;
        $this->rua = $rua;
        $this->cep = $cep;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->numero = $numero;
    }
    
    function _construct(){
        
    }
    function getNome() {
        return $this->nome;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getDataNascimento() {
        return $this->dataNascimento;
    }

    function getEmail() {
        return $this->email;
    }

    function getTelefone1() {
        return $this->telefone1;
    }

    function getTelefone2() {
        return $this->telefone2;
    }

    function getRua() {
        return $this->rua;
    }

    function getCep() {
        return $this->cep;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getEstado() {
        return $this->estado;
    }

    function getNumero() {
        return $this->numero;
    }

    function getId() {
        return $this->id;
    }

        
    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setDataNascimento($dataNascimento) {
        $this->dataNascimento = $dataNascimento;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTelefone1($telefone1) {
        $this->telefone1 = $telefone1;
    }

    function setTelefone2($telefone2) {
        $this->telefone2 = $telefone2;
    }

    function setRua($rua) {
        $this->rua = $rua;
    }

    function setCep($cep) {
        $this->cep = $cep;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }


}
