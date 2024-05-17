<?php

abstract class Cliente {
    protected $codigo;
    protected $nome;
    protected $idade;

    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }
    public function getCodigo(){
        $this->codigo;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        $this->nome;
    }

    public function setIdade($idade){
        $this->idade = $idade;
    }
    public function getIdade(){
        $this->idade;
    }

    public function MostrarDados() {
        Echo "<br> Codigo: ". $this->codigo. "<br> Nome: " .$this->nome. " <br> Idade: " . $this->idade;
    }

    public abstract function avaliaIdade();
}