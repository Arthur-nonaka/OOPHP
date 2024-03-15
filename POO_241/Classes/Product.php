<?php
class Product
{
    public $code;
    public $name;
    public $price;

    public function ShowAttributes()
    {
        echo "<br>Código: ".$this->code." Nome: ".$this->name." Preço R$ ".$this->price;
    }
    public function CalcularAumento($porcentagem)
    {
        $this->price = $this->price + ($this->price * $porcentagem/100);
        echo "Preço: R$ ".$this->price;
    }

    public function CreateProduct($code,$name,$price)
    {
        $this->code = $code;
        $this->name = $name;
        $this->price = $price;
    }
}

$p1 = new Product;
$p1->CreateProduct(1,"Batata", 5);
$p1->CalcularAumento(10);