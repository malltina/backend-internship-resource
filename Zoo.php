<?php

interface Animal
{

    public function makeSound();


    public function move();

}

interface MammalAnimal extends Animal
{
    public function giveBirth();
}

interface WildAnimal extends Animal
{
    public function hunt(Animal $animal);
}

abstract class HunterAnimal implements WildAnimal
{
    public function hunt(Animal $animal)
    {
        if (is_subclass_of($animal, 'WildAnimal')) {
            echo "Yes this animal can attack.$animal";

        }

        throw new Exception('this animal cannot hunt');
    }
}

interface Amphibian extends Animal
{
    public function layegg(Animal $animal);

}

abstract class platypus implements Amphibian
{
    public function layegg(Animal $animal)
    {
        if (is_subclass_of($animal, 'Amphibian')) {
            echo "Yes this animal can lay egg.$animal";

        }

        throw new Exception('this animal cannot lay an egg');
    }

}

class Dog implements MammalAnimal
{


    public function makeSound()
    {
        return "haw haw";
    }

    public function move()
    {
        return "dog moves like a dog";
    }

    public function giveBirth()
    {
        return "animal can give birth";
    }


}

class Wolf extends HunterAnimal implements MammalAnimal
{

    public function move()
    {
        return "wolf moves like a wolf";
    }

    public function makeSound()
    {
        return "howling";
    }

    public function giveBirth()
    {
        return "animal can give birth";
    }

}

class snake extends platypus implements Amphibian
{
    public function move()
    {
        return "wolf moves like a wolf";
    }

    public function makeSound()
    {
        return "fissssss";
    }

    public function layegg()
    {
        return "animal can give birth";
    }


}
