<?php
class Request
{
    public string $type;
    public int  $getCounter = 0;
    public int $postCounter = 0;

    public function get($url) :void
    {
        $this->getCounter++;
    }

    public function post($url) :void
    {
        $this->postCounter++;
    }

    public function countOfCalls() :int
    {
        return $this->getCounter + $this->postCounter;
    }

    public function countOfCallFor($type) :int
    {
        if ($type == 'get') {
            return $this->getCounter;
        }
        elseif ($type == 'post')
        {
            return  $this->postCounter;
        }
        else{
            throw new Exception('type is invalid!');
        }
    }
}


