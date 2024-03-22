<?php

class Employee
{
    private $code;
    private $name;
    private $wage;

    public function GetCode()
    {
        return $this->code;
    }
    public function SetCode($code)
    {
        $this->code = $code;
    }
    public function GetName()
    {
        return $this->name;
    }
    public function SetName($name)
    {
        $this->name = $name;
    }
    public function GetWage()
    {
        return $this->code;
    }
    public function SetWage($wage)
    {
        $this->wage = $wage;
    }

    public function NewEmployee($code, $name, $wage)
    {
        $this->code = $code;
        $this->name = $name;
        $this->wage = $wage;
    }

    public function RemoveEmployee()
    {
        $this->wage = 0;
    }

    public function ShowAttributes()
    {
        echo "<br> Codigo: " . $this->code;
        echo "<br> Nome: " . $this->name;
        echo "<br> Salario: " . $this->wage;
    }
}