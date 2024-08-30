<?php
class FuncionarioPermanente implements ICalculadoraSalarios {
    public function calcularSalario (Funcionario $funcionario) {
        return $funcionario->salario * 1.03;
    }
}