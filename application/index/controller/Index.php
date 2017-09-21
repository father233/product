<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
       echo "下载后的重新测试";
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
