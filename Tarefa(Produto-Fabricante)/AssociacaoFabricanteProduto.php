<?php

require_once 'Fabricante.php';
require_once 'Produto.php';

$fabricante = new Fabricante("Trident", "Rua Mariola", "12.345.678/0001-00");

$produto = new Produto("Chiclete de Menta", 100, 2.49, $fabricante);

Echo "<pre>";
    var_dump($produto);
Echo "</pre>";
