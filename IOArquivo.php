<?php

class IOArquivo
{
    private $filePath = __DIR__ . 'database.json';

    public function leitor()
    {
        if (file_exists($this->filePath))
        {
            return json_decode(file_get_contents($this->filePath));
        }else {
            die('Arquivo nao existe');
        }
    }

    public function escritor()
    {
        if (empty($arr))
        {
            echo 'Vazio';
            return false;
        }

        if (file_exists($this->filePath))
        {
            file_put_contents($this->filePath,json_encode($arr));
            return true;
        }
    }
}