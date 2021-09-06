<?php

//Incomplete homework


// get(string $url): void
// post(string $url): void
// countOfCalls(): int
// countOfCallFor(string $method): int

class requesttime
{
    public int $get;
    public int $post;
    public $count;

    public function get ($url) : void
    {
        if ($this->get == $this->get) {
            $this->get++;
            return "<a href='http://www.google.com'></a>";
        }else{
            echo 'not request!';
        }

    }

    public function post ($url) : void
    {
        if ($this->post == $this->post) {
            $this->post++;
            return "<a href='http://www.google.com'></a>";
        }else{
            echo 'not request!';
        }

    }

    public function countOfCalls() : int
    {
        return $this-> get + $this->post;
    }


    public function countOfCallFor($count) : int
    {

        if ($count == 'get') {
            return $this->get;
        }
        elseif ($count == 'post')
        {
            return  $this->post;
        }
        else{
            echo ' Its Type Is Invalid ';
        }

    }
}



