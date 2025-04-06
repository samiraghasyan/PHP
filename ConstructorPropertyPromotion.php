<?php


// In before php 8

class ConstructorPropertyPromotion1
{
    private string $name;
    private int $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}

// In after php 8

class ConstructorPropertyPromotion2
{

    public function __construct(
        private string $name,
        private int    $age
    )
    {

    }

}