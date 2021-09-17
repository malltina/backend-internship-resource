<?php
class Req
{
private int $getcalls=0;
private int $postcalls=0;


public function get(string $url):void
{
    $this->getcalls +=1;
}

public function post(string $url):void
{
    $this->postcalls +=1;;
}

public function coutOfAll():int
{
   return $this->getcalls + $this->postcalls ;
}

public function countOfFor(string $method):int
{
 
  return  match($method)
   {
        'get' => $this->getcalls,
        'post' =>  $this->postcalls,
        default => throw new InvalidArgumentException("error $method")

        
    };

}

}

$requests=new Req();
$requests->get('google.com');
$requests->get('google.com');
$requests->get('google.com');
$requests->post('google.com');
$requests->get('facebook.com');
var_dump($requests->coutOfAll());
var_dump($requests->countOfFor('get'));
var_dump($requests->countOfFor('post'));

