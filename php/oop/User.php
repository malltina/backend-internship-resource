<?php

class User
{
    public function __construct(protected string $email)
    {
    }

    public function email(): string
    {
        return $this->email;
    }
}

class UserReview extends User
{
    public function __construct(private Useridentifier $id, string $email)
    {
        parent::__construct($email);
    }

    public function id(): Useridentifier
    {
        return $this->id;
    }
}

class Useridentifier
{
    public function __construct(private string $value)
    {
    }
    public function value(): string
    {
        return $this->value;
    }
}

interface RegisterUser
{
    public function reg(User $user): Useridentifier;
    public function changeMail(Useridentifier $id, string $newMail): void;
    public function checkMailValidation(string $email);
}

interface IdentifierFactory
{
    public function create(): Useridentifier;
}

class BuildRandomIdFactory implements IdentifierFactory
{
    public function create(): Useridentifier
    {
        return new Useridentifier((string) uniqid() . mt_rand(10, 100));
    }
}

class LegacyRegisterUser implements RegisterUser
{
    private array $users = [];

    public function __construct(private IdentifierFactory $idFactory)
    {
    }

    public function reg(User $user): Useridentifier
    {
        // $random = (string) mt_rand(100, 1000) . chr(mt_rand(98, 150));
        $id = $this->idFactory->create();
        $this->people[] = new UserReview($id, $user->email());
        return $id;
    }

    public function changeMail(Useridentifier $id, string $newMail): void
    {
        foreach ($this->users as $index => $user) {
            if ($id->value() === $user->id()->value() && $this->checkMailValidation($this->users[$index])) {
                $this->users[$index] = new UserReview($user->id(), $newMail);
                return;
            }
        }

        throw new PersonNotFound;
    }

    public function checkMailValidation(string $email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception('Your email is valid');
        }
        throw new Exception('Your email is invalid');
    }

    public function users(): array
    {
        return $this->users;
    }
}
