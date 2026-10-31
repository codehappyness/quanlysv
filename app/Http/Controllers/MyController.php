<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function Hello()
    {
        return "Hello Controller";
    }
    //
    public function Languages($name)
    {
        return "Hello Controller {$name}";
    }
    public function testView()
    {
        return view("testview");
    }

    public function viewName($name)
    {
        return view("viewpara", ['name' => $name]);
    }

    public function getURL(Request $request)
    {
        echo $request->path();
        echo "<br/>";
        echo $request->url();
    }

    public function getForm(Request $request)
    {
        return view('getform');
    }

    public function postForm(Request $request)
    {
        echo $request->name;
        echo "<br/>";
        echo $request->_token;
        return view('getform');
    }

    public function getUpload(Request $request)
    {
        return view('uploadfile');
    }

    public function postUploadfile(Request $request)
    {
        if ($request->hasFile('filename')) {
            $file = $request->file('filename');

            if (strtolower($file->getClientOriginalExtension()) === 'jpeg') {
                $name = $file->getClientOriginalName();

                $file->move(public_path('images'), $name);

                echo "Upload thành công";
            } else {
                echo "Không đúng file jpg";
            }
        } else {
            echo "Upload không thành công";
        }
    }
}
