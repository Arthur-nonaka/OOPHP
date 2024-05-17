<?php
class ClienteFisico extends Cliente{
    private $rg;
    private $cpf;

    public function setRG($rg){
        $this->rg = $rg;
    }
    public function setCPF($cpf){
        $this->cpf = $cpf;
    }

    public function mostrarDados(){
        parent::mostrarDados();
        echo "<br> RG: " . $this->rg . " <br> CPF: ". $this->cpf;
    }

    public function avaliaIdade() {
        if($this->idade >= 18 && $this->idade < 40) {
            echo "<br> Cliente fisico";
        }
    }
}