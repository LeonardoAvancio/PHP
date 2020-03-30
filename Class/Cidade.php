<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cidade
 *
 * @author leonardoca
 */
class Cidade {
    //put your code here
    
    private $nome;
    
    private $areaGeografica;
    
    private $populacao;
    
    private $estado;
    
    private $idade;
    
    private $prefeito;
    
    function getNome() {
        return $this->nome;
    }

    function getAreaGeografica() {
        return $this->areaGeografica;
    }

    function getPopulacao() {
        return $this->populacao;
    }

    function getEstado() {
        return $this->estado;
    }

    function getIdade() {
        return $this->idade;
    }

    function getPrefeito() {
        return $this->prefeito;
    }

    function setNome($nome): void {
        $this->nome = $nome;
    }

    function setAreaGeografica($areaGeografica): void {
        $this->areaGeografica = $areaGeografica;
    }

    function setPopulacao($populacao): void {
        $this->populacao = $populacao;
    }

    function setEstado($estado): void {
        $this->estado = $estado;
    }

    function setIdade($idade): void {
        $this->idade = $idade;
    }

    function setPrefeito($prefeito): void {
        $this->prefeito = $prefeito;
    }
    
}
