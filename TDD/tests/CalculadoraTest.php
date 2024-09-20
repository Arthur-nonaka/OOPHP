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

    }
}