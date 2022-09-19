<?php

abstract class Animal
{
    abstract public function makeSound();
}

class Dog extends Animal
{
    public function makeSound()
    {
        echo "Bow";
    }
}

class Cat extends Animal
{
    public function makeSound()
    {
        echo "Meow";
    }
}

$Dog = new Dog();
$Cat = new Cat();

$Dog->makeSound();

echo "\n";

$Cat->makeSound();

?>