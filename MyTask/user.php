<?php 
class User 
{
    private string $user_email;

    public function __construct(string $mail)
    {
        $this->setMail($mail);
    }

    public function getMail()
    {
        return $this->user_email;
    }

    public function setMail(string $email){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $this->user_email = $email;
        }
		else{
            throw new Exception('Please check Email address');
		}
    }
}
 
// check class user
$userEmail = new User('payam_4030@yahoo.com');
var_dump($userEmail);
$userEmail->setMail('payammhmd@gmail.com');
var_dump($userEmail);