<?php
abstract class AnimalType
{
    const wild = "wild";
    const domestic = "domestic";
}

abstract class Animal{
	abstract public function move();
	abstract public function sound();
	abstract public function type() : string;
}

//lion
class Lion extends Animal {
	use GivenBirth;
	use Hunt;
	public function move(){
		echo "move";
	}
	public function sound(){
		echo "sound: roar roOoooar";
	}
	public function type(): string{
		echo "type: ";
		$type = AnimalType::wild;
		return $type;
	}
}

// Sheep
class Sheep extends Animal {
	use GivenBirth;
	public function move(){
		echo "move";
	}
	public function sound(){
		echo "sound: Baaa Baaaa";
	}
	public function type(): string{
		echo "type: ";
		$type = AnimalType::wild;
		return $type;
	}
}

trait GivenBirth 
{
    public function couldGivenBirth()
    {
        echo "Yes, it is Given Birth";
    }
}

trait Hunt 
{
    public function Hunting()
    {
        echo "Yes, it is Hunt";
    }
}

// test class lion
echo "Lion";
echo "\n";
$lion = new Lion;
echo $lion->type();
echo "\n";
echo $lion->sound();
echo "\n";
echo $lion->couldGivenBirth();
echo "\n";
echo $lion->Hunting();
echo "\n\n";
// test class Sheep
echo "Sheep";
echo "\n";
$sheep = new Sheep;
echo $sheep->type();
echo "\n";
echo $sheep->sound();
echo "\n";
echo $sheep->couldGivenBirth();