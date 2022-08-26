<?php

require_once "./vendor/autoload.php";

use Uchoa\DigitalCep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('68900115');

print_r($resultado);
