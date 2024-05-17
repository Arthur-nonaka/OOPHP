<?php

class Employee
{
    
    private int $code;
    private string $name;
    private float $wage;

    public function __construct(Int $code, String $name, Float $wage) {
        $this->code = $code;
        $this->name = $name;
        $this->wage = $wage;
    }

    public function getCode()
    {
        return $this->code;
    }
    public function setCode($code)
    {
        $this->code = $code;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getWage()
    {
        return $this->code;
    }
    public function setWage($wage)
    {
        $this->wage = $wage;
    }

    public function newEmployee($code, $name, $wage)
    {
        $this->code = $code;
        $this->name = $name;
        $this->wage = $wage;
    }

    public function removeEmployee()
    {
        $this->wage = 0;
    }

    public function showAttributes()
    {
        echo "<br> Codigo: " . $this->code;
        echo "<br> Nome: " . $this->name;
        echo "<br> Salario: " . $this->wage;
    }
}

$em1 = new Employee(1,"Batata", 432);
$em1->ShowAttributes();
