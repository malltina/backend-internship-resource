<?php

abstract class Animal
{

    public function makeSound()
    {

    }

    public function move()
    {
    }
}

class wildAnimal extends Animal
{

}

trait givingbirth
{
    public function parturition()
    {
        return " The animal can give birth";
    }
}

trait hunting
{
    public function hunt()
    {
        return " The animal can hunt";
    }
}

class Dog extends Animal
{
    public function makeSound()
    {
        return "haw haw";
    }

    public function move()
    {
        return "dog moves like a dog";
    }

    use givingbirth;
    use hunting;
}

class Wolf extends WildAnimal
{
    public function move()
    {
        return "wolf moves like a wolf";
    }

    public function makeSound()
    {
        return "howling";
    }

    use hunting;
    use givingbirth;
}


$wolf = new wolf();

if (is_subclass_of($wolf, 'WildAnimal')) {
    var_dump($wolf->hunt());
} else {

    throw new Exception('this animal cannot hunt');
}
var_dump($wolf->makeSound());
var_dump($wolf->move());
$dog = new dog();
var_dump($dog->makeSound());
var_dump($dog->parturition());
var_dump($dog->move());
if (is_subclass_of($dog, 'WildAnimal')) {
    var_dump($dog->hunt());
} else {

    throw new Exception('this animal cannot hunt');
}


?>