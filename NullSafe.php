<?php

Class User{
    public function getAddress()
    {
        return new Address();
    }
}

Class Address{
    public function getStreet()
    {
        return 'Main Street';
    }
}

// checked null able in old version

$user = new User();
$street = $user !== null ? ($user->getAddress() !== null ? $user->getAddress()->getStreet() : null): null;

// Null Safe Operator in php 8
$street = $user ?->getAddress()?->getStreet();

echo $street ?? 'No street found';