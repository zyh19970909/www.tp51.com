<?php

namespace app\login\controller;
use think\facade\Request;
use think\Controller;
class LoginController extends Controller
{
    public  function index(){
       return $this->redirect('/login/view/login/login.html');
    }
    public  function login(){
        $nae=Request::post('Name');


        return  '<h1>'.$nae.'</h1>'.'<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; }
 body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> 
 <h1>^_^</h1><p> ThinkPHP V5.1<br/><span style="font-size:30px">十二年磨一剑 - 为API开发设计的高性能框架</span></p></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>
<script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_bd568ce7058a1091"></thinkad>';
    }
}