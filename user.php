<?php

class user 

{

    protected string $email;

    public function __construct(string $email)
    {
        $this->validateEmail($email);

        $this->email=$email;
    }


    public function validateEmail(string $email):void

    {
         if(!filter_var($email,FILTER_VALIDATE_EMAIL))
         
         {
             throw new InvalidArgumentException("input email is invalid");
         }
        
         
    }

     public function changeEmail(string $email)
      {
      $this->validateEmail($email);
      $this->email=$email;
      }

      public  function email():string
      {
         return $this->email;
      }
        
}



$user=new user('erfanansari@yahoo.com');
$user->changeEmail('aliansari@yahoo.com');
var_dump($user);
