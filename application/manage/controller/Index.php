<?php
namespace app\manage\controller;

class Index
{
    public function index()
    {

    	$data=db('shop')->select();
    	return json_decode($data);
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
