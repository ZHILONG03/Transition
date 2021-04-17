<?php


namespace app\index\controller;


use think\Controller;
use think\Request;

class Common extends Controller
{
    public function __construct(Request $request = null)
    {
        echo '建立一个公用类';
    }
}