<?php

class User
{
    protected string $email;

    public function __construct(string $email)
    {
        $this->setEmail($email);


    }


    public function setEmail(string $email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("the email you have entered is invalid");
        }
        $this->email = $email;
    }


}

class Comment
{

    private int $id;

    public function __construct(public string $contents, public User $user, public DateTimeImmutable $submitedAt)
    {
        $this->id = mt_rand(10, 1000);
    }

    public function getId(): int
    {
        return $this->id;
    }

}

class Post
{

    public array $comments;

    public function __construct(public User $author, public string $content, public string $title)
    {
    }

    public function addComment(int $id, Comment $comment): int
    {

        $this->comments[$comment->getId()] = $comment;
        return $id;
    }


    public function removeComment(int $id): void
    {
        foreach ($this->comments as $key => $comment) {
            if ($comment->getId() == $id) {
                unset($this->comments[$key]);

            }
        }

    }


}

$user = new User('hooshi@gmail.com');
$date = new DateTimeImmutable('2026-09-13');
$comment = new Comment('noooooooooo', $user, $date,);
$post = new Post($user, 'nocontetn', 'notil');
$post->addComment($comment);
//$post->removeComment('2');


var_dump($post);