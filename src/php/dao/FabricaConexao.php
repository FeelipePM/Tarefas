<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FabricaConexao
 *
 * @author MP
 */
class FabricaConexao {

    public static function pegarConexao() {
        return new PDO('mysql:dbname=tarefas;host=127.0.0.1', 'root', '');
    }

}
