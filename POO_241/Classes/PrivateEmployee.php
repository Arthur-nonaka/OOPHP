<?php

class Employee {
    private $code;
    private $name;
    private $wage;

    public function GetCode(){
        return $this->code;
    }
    public function SetCode($code){
        $this->code = $code;
    }

    public function NewEmployee($code, $name, $wage) {
    }

    public function RemoveEmployee($code){

    }

    public function ShowAttributes() {
        
    }
}