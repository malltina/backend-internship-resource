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
    private int $likes = 0;
    private int $dislikes = 0;

    private int $id;

    public function __construct(public string $contents, public User $user, public DateTimeImmutable $submitedAt)
    {
        $this->id = mt_rand(10, 100);
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function Like()
    {
        $this->like++;
    }

    public function DisLike()
    {
        $this->like--;
    }
}

class Post
{

    public array $comments;

    public function __construct(private string $id, public User $author, public string $content, public string $title, public DateTimeImmutable $publishedAt)
    {
    }

    public function addComment(Comment $comment)
    {

        $this->comments[$comment->getId()] = $comment;


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

interface PostRepositoryInterface
{
    public function find(int $id);

    public function update(Post $post);

    public function save(Post $post);

    public function remove(int $id);

    public function sort(Post $post);
}

class PostRepository implements PostRepositoryInterface
{
    private array $posts = [];

    public function find($id)
    {

        return $this->posts[$id];
    }

    public function save(Post $post)
    {

        $this->posts [] = $post;
    }

    public function remove(int $id)
    {

        foreach ($this->posts as $key => $post) {
            if ($post->id == $id) {
                unset($this->posts[$key]);

            }
        }
    }

    public function update(Post $post, int $id)
    {

        foreach ($this->posts as $key => $post) {
            if ($post->id == $id) {
                $this->posts[$key] = $post;

            }
        }
    }

    public function sort(Post $post)
    {
        $arr = $this->posts;
        function do_compare($item1, $item2)
        {
            $ts1 = strtotime($item1['publishedAt']);
            $ts2 = strtotime($item2['publishedAt']);
            return $ts2 - $ts1;
        }

        usort($arr, 'do_compare');
    }


}
