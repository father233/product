<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        echo "我只是一个简单的小测试";
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
