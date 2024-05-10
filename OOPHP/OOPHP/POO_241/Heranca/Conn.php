<?php

    require_once "Conta.php";
    require_once "ContaCorrente.php";
    require_once "ContaPoupanca.php";

    $p = new ContaPoupanca("090-7", "10.450-2", 1000);
    echo "<pre>";
    var_dump($p);
    echo "</pre>";
    
    echo "Saldo poupanca R$" . $p->getSaldo(). "<br>";
    $p->depositar(100);
    echo "Saldo poupanca R$" . $p->getSaldo(). "<br>";
    $p->Retirar(20);
    echo "Saldo poupanca R$" . $p->getSaldo(). "<br>";
    
    
    $c = new ContaCorrente("092-7", "12.450-2", 300, 1000);
    echo "<pre>";
    var_dump($c);
    echo "</pre>";
    
    echo "Saldo poupanca R$" . $c->getSaldo(). "<br>";
    $c->depositar(100);
    echo "Saldo poupanca R$" . $c->getSaldo(). "<br>";
    $c->Retirar(500);
    echo "Saldo poupanca R$" . $c->getSaldo(). "<br>";