<?php

class User{

    public function __construct(public string $email)
    {
        $this->emailValidation($this->email);
    }

    public function emailValidation($email): bool
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            throw new Exception("Email address was invalid!");
        }
        return true;
    }

    public function changeEmail($email) {
        return $this->emailValidation($this->email = $email);
    }
}

$emailValid = new User('aram@khorsandi.com');
echo $emailValid->email;
$emailValid->changeEmail('kargmail.com');
echo $emailValid->email;
