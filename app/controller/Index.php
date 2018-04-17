<?php
/**
 * --------------------------------------------------------------------------
 * @desc livephp index控制器简单模拟
 * @pulish livephp
 * --------------------------------------------------------------------------
 */
namespace app\controller;

class Index{

    public function index(){
    	view('index',['title'=>'Livephp Another PHP Framework']);
    }
}
