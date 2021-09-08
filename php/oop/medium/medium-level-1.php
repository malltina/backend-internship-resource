<?php

class Post
{
    public function __construct(
        protected string $title,
        protected string $content,
        protected string $author,
        protected array $comments = []
    ) {}

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getContent() :string
    {
        return $this->content;
    }

    public function addComment(string $string): void
    {
        $this->comments[] = $string;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getComments(): array
    {
        return $this->comments;
    }

}

$post = new Post('title here', 'content here', 'Aram', ['comment-1', 'comment-2']);
var_dump($post);