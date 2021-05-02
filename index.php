<?php

require_once __DIR__ . "/src/Model/Equacao.php";

use Estudo\Src\Model\Equacao;

$escola = new  Equacao();

//$escola->geradorDeEquacao(0,180);

$escola->resolverEmCelsius(40,20,520);

//$escola->resolverEmFahrenheit(0, 0, 180);
