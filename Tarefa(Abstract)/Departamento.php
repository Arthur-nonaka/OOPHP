<?php
Class Departamento {
    private $functionarios;
    public function __construct(private $codigo, private $nome) {
        $this->funcionarios = [];
    }

    public function mostrarAtributos() {
        Echo "<br>" . $this->codigo . "<br>Nome: " . $this->nome;
        Echo "<ul>";
        foreach($this->funcionarios as $funcionario) {
            Echo "<li>";
            Echo $funcionario->getNome();
            Echo "</li>";
        }
        Echo "</ul>";
    }

    public function admitirFuncionario(Funcionario $novoFuncionario) {
        $this->funcionarios[] = $novoFuncionario;
    }

    public function demitirFuncionario(int $codigo) {
        foreach($this->funcionarios as $funcionario) {
            if($funcionario->getCodigo() == $codigo) {
                unset($this->funcionarios[$codigo]);
            }
        }
    }

    public function listarDadosFuncionarios() {
        foreach($this->funcionarios as $funcionario) {
            $funcionario->mostrarAtributos();
        }
    }

    public function calcularFolhaPagamento() {
        $totalPagamento = 0;
        foreach($this->funcionarios as $funcionario) {
            $totalPagamento += $funcionario->calcularSalario(30);
        }
        return $totalPagamento;
    }

    public function mostrarQtdeFilhosPorFuncionario() {
        foreach($this->funcionarios as $funcionario) {
            Echo "<br>" . $funcionario->getNome();
            Echo "<br>" . $funcionario->calcularTotalFilhos() . " Filhos";
        }
    }
}