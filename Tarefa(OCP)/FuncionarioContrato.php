<?php
class FuncionarioContrato implements ICalculadoraSalarios {
    public function calcularSalario(Funcionario $funcionario) {
        return $funcionario->salario;
    }
}