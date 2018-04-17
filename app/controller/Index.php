<?php
namespace app\controller;
use ReflectionMethod;
use core\Container;
use app\model\Di;
class Index{

    public function index(){
    	view('index',['title'=>'Livephp Another PHP Framework']);
    }

    public function test(Di $di){
    	$di->say();
    }
}
