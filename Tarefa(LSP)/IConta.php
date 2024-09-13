<?php

interface IConta {
    public function sacar($valor);
    public function getSaldo();
}