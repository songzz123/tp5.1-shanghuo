<?php

namespace app\home\controller;

use think\Controller;
use think\Request;

class Index extends Controller
{
    public function index()
    {
        echo "你好";
       // return $this->fetch();
    }
}