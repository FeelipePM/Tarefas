<?php

class Usuario {

    private $idUsuario;
    private $nome;
    private $sobrenome;
    private $senha;
    private $email;
    private $urlAlterarSenha;
    private $urlConfirmaEmail;
    private $ativo;

    function __construct($nome, $sobrenome, $senha, $email, $ativo) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->senha = $senha;
        $this->email = $email;
        $this->ativo = $ativo;
    }

    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getNome() {
        return $this->nome;
    }

    function getSobrenome() {
        return $this->sobrenome;
    }

    function getSenha() {
        return $this->senha;
    }

    function getEmail() {
        return $this->email;
    }

    function getUrlAlterarSenha() {
        return $this->urlAlterarSenha;
    }

    function getUrlConfirmaEmail() {
        return $this->urlConfirmaEmail;
    }

    function getAtivo() {
        return $this->ativo;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setUrlAlterarSenha($urlAlterarSenha) {
        $this->urlAlterarSenha = $urlAlterarSenha;
    }

    function setUrlConfirmaEmail($urlConfirmaEmail) {
        $this->urlConfirmaEmail = $urlConfirmaEmail;
    }

    function setAtivo($ativo) {
        $this->ativo = $ativo;
    }

}
