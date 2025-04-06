<?php


function createUser($name, $age, $active)
{
    return "Name :  $name; Age : $age; Active : $active;";
}

echo createUser(age: 25, name: 'Reza', active: true);


