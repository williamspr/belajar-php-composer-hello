<?php

namespace DimataItProblem;

class Customer{
    public function __construct(private string $name){

    }

    public function sayHello(string $name): string{
        return "Halo Customer $this->name, saya $name";
    }
}