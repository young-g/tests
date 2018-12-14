<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
    	$data=db('shop')->field('name,shop_id')->select();
    	return json_encode($data);
    }




}
