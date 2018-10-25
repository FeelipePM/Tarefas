<?php


class Tarefa {

    private $idTarefa = "";
    private $titulo = "";
    private $descricao = "";
    private $dataCriacao = "";
    private $dataLimite = "";
    private $idUsuario = "";
    private $ativa = "";

    public function __construct($titulo, $descricao, $dataLimite) {
        date_default_timezone_set('America/Sao_Paulo');
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->dataCriacao = date('d-m-y H:i');
        $this->dataLimite = $dataLimite;
    }

    function getIdTarefa() {
        return $this->idTarefa;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getDataCriacao() {
        return $this->dataCriacao;
    }

    function getDataLimite() {
        return $this->dataLimite;
    }

    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getAtiva() {
        return $this->ativa;
    }

    function setIdTarefa($idTarefa) {
        $this->idTarefa = $idTarefa;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setDataCriacao($dataCriacao) {
        $this->dataCriacao = $dataCriacao;
    }

    function setDataLimite($dataLimite) {
        $this->dataLimite = $dataLimite;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setAtiva($ativa) {
        $this->ativa = $ativa;
    }

}
