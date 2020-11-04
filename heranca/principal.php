<?php

require_once 'Pessoa.php';
require_once 'Fisica.php';
require_once 'Juridica.php';

$juridica = new Juridica('Unipê', "123456-45");
$juridica->validarCnpj();
