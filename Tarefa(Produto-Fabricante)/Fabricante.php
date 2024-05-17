<?php

class Fabricante
{

    public function __construct(private string $nome, private string $endereco, private string $documento)
    {

    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }
    public function getEndereco()
    {
        return $this->endereco;
    }
    public function setDocumento($documento)
    {
        $this->documento = $documento;
    }
    public function getDocumento()
    {
        return $this->documento;
    }
}