<?php


namespace app\index\controller;


class DemoController
{
    public function  index_action(){
        echo 'Hello,wdffkdj';
    }
    public function  demo_action($name){
        return '欢迎'.$name;
    }

}