<?php

require_once __DIR__ . '/database.json';
require_once __DIR__ . '/Usuario.php';
require_once __DIR__ . '/IOArquivo.php';

echo 'titulo<br><br>';

$io = new IOArquivo;

$arr = $io->leitor();

$io->escritor($arr);