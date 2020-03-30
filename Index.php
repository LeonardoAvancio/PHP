<?php

require_once './Estado.php';
require_once './Cidade.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Index
 *
 * @author leonardoca
 */
class Index {
    
}

$estado = new Estado();
$estado->setNome("Paraná");
$estado->setGovernador("Ratinho JR");
$estado->setQuantidadeMunicipios(500);


$cidade = new Cidade();
$cidade->setNome("Paranavaí");
$cidade->setPopulacao(88.950);
$cidade->setPrefeito("QIK");
$cidade->setEstado($estado->getNome());

echo "<pre>";
var_dump($cidade);


$in = new Index();




