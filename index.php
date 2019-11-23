<?php



require_once __DIR__ . '/database.json';
require_once __DIR__ . '/Usuario.php';
require_once __DIR__ . '/IOArquivo.php';

echo 'Depois eu penso num titulo bonito';

$io = new IOArquivo;

$arr = $io->readfile();

debug($io->Leitor());

$io->Escritor($arr);

debug($arr);