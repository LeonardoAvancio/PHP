<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Estado
 *
 * @author leonardoca
 */
class Estado {

    private $nome;
    private $quantidadeMunicipios;
    private $governador;
    
    function getNome() {
        return $this->nome;
    }

    function getQuantidadeMunicipios() {
        return $this->quantidadeMunicipios;
    }

    function getGovernador() {
        return $this->governador;
    }

    function setNome($nome): void {
        $this->nome = $nome;
    }

    function setQuantidadeMunicipios($quantidadeMunicipios): void {
        $this->quantidadeMunicipios = $quantidadeMunicipios;
    }

    function setGovernador($governador): void {
        $this->governador = $governador;
    }

}
