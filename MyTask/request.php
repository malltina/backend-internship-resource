<?php 
class Request 
{
    private static $countGet;
    private static $countPost;

    public function get(string $myUrl)
    {
		self::$countGet++;
    }

    public function post(string $myUrl)
	{
		self::$countPost++;

    }

    public function countOfCalls(){
		return self::$countGet + self::$countPost;
    }

    public function countOfCallFor(string $method):int
	{
		if($method == "post"){
			return self::$countPost;
		} elseif($method == "get"){
			return self::$countGet;
		}
		else{
		return 0;
		}
    }
}
 
// check class Request
$req = new Request;
$req->post('Faraz');
$req->post('Hamid');
$req->post('Sina');
$req->get('Payam');
$req->get('Mohammadi');
echo "count Calls:";
var_dump($req->countOfCalls());
echo "post:";
var_dump($req->countOfCallFor('post'));
echo "get:";
var_dump($req->countOfCallFor('get'));
