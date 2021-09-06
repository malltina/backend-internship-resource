<?php

class user {

    private string $User;

    public function __construct(protected string $email)
    {
        $this-> setEmail($email);
    }

    public function getEmail(): string
    {
        return $this-> User;
    }

    public function setEmail(string $email)
    {

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("email is not a valid email address");
            } 
            return  $this-> User = $email;   

    }
}





$e= new user('mohammadnezhadm2@gmail.com');
$e->setEmail('mohammadnezhadm2@gmail.com');
var_dump($e->getEmail()); //true


$e= new user('mohammadnezhadm2@gmail.com');
$e->setEmail('mo.com');
var_dump($e->getEmail()); //false