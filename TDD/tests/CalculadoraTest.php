<?php
namespace tests;

use PHPUnit\Framework\TestCase;
use app\Calculadora;
class CalculadoraTest extends TestCase {
    public function test_soma() {
        $calc = new Calculadora();

        $this->assertInstanceOf(Calculadora::class, $calc);

        $resultado = $calc->soma(10,20);
        $this->assertEquals(30,$resultado);

        //Teste da funcao subtracao, envia 20 e 10, devera retornar 10
        $resultado = $calc->subtracao(20,10);
        $this->assertEquals(10,$resultado);

        //Teste da funcao divisao, envia 20 e 10, devera retornar 2
        $resultado = $calc->divisao(20,10);
        $this->assertEquals(2,$resultado);

        //Teste da funcao multiplicacao, envia 20 e 10, devera retornar 200
        $resultado = $calc->multiplicacao(20,10);
        $this->assertEquals(200,$resultado);

    }
}