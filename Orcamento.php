<?php

class Orcamento {
    private $itens;

    public function adiciona (IOrcavel $item, $quantidade) {
        $this->itens[] = [$item, $quantidade];
    }

    public function calcularTotal() {
        $total = 0;

        foreach($this->itens as $item) {
            $total += $item[0]->getPreco() * $item[1];
        }

        return $total;
    }
}