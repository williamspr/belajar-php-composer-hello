<?php

namespace DimataItProblem;

class Customer{
    public function __construct(private string $name){

    }

    public function sayHello(string $name = "Guest"): string{
        return "Halo Customer $this->name, saya $name";
    }
}