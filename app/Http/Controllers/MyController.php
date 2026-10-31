<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function Hello() {
        return "Hello Controller";
    }
    //
    public function Languages($name) {
        return "Hello Controller {$name}";
    }
    public function testView(){
        return view("testview");
    }

    public function viewName($name){
        return view("viewpara", ['name' => $name]);
    }

    public function getURL(Request $request){
        echo $request->path();
        echo "<br/>";
        echo $request->url();
    }

    public function getForm(Request $request){
        return view('getform');
    }

    public function postForm(Request $request){
        echo $request->name;
        echo "<br/>";
        echo $request->_token;
// Xóa tất cả token hiện tại của user đang đăng nhập
//$request->user()->tokens()->delete();

// Hoặc chỉ xóa token hiện tại đang dùng để gửi request
//$request->user()->currentAccessToken()->delete();
        return view('getform');
    }
}
