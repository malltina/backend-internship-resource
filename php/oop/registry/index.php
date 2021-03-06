<?php

use App\Person\Person;
use App\Person\RandomIdentifierFactory;
use App\Registry\LegacyRegisterOffice;

require 'vendor/autoload.php';



$registry = new LegacyRegisterOffice(new RandomIdentifierFactory);
$p1 = $registry->register(new Person('John Doe'));
$p2 = $registry->register(new Person('Foo Bar'));
$registry->changeName($p1, 'X');
$registry->changeName($p1, 'X');
$registry->changeName($p1, 'X');
$registry->changeName($p1, 'X');

foreach ($registry->people() as $person) {
    var_dump($person->name());
}
