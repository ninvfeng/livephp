<?php
/**
 * --------------------------------------------------------------------------
 * @desc livephp index控制器简单模拟
 * @pulish livephp
 * @time 2018-04-17
 * --------------------------------------------------------------------------
 */
namespace app\controller;
class Index{

    public function index(){
    	view('index',['title'=>'Livephp Another PHP Framework']);
    }

    public function test(){
    	$res=model('User')->allUser();
    	dump($res);
    }
}
