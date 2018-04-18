<?php
namespace app\controller;
class Index{

    public function index(){
    	view('index',['title'=>'Livephp Another PHP Framework']);
    }

    public function test(){
    	return 'test';
    }
}
