<?php

class User
{

    public function __construct(protected string $email)
    {
        $this->emailValidation($this->email);
    }

    public function emailValidation($email): bool
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Email address was invalid!");
        }
        return true;
    }

    public function changeEmail($email) :void
    {
         $this->emailValidation($this->email = $email);
    }
}

