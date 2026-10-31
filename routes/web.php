<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('mkularavel', function () {
    return "Xin chào, Đây là trang laravel";
});

Route::get('myroute/{ten}', function ($ten) {
    return "Xin chào, " . $ten . "";
});

Route::get('myroute1/{ten}', function ($ten) {
    return "Xin chào, " . $ten . "";
})->where(['ten' => '[a-zA-Z]+']);

Route::get('myroute2/{so}', function ($so) {
    return "Tham số nhận được là: " . $so . "";
})->where(['so' => '[0-9]{2,4}']);

Route::group(['prefix' => 'gioitinh'], function () {
    Route::get('nam', function () {
        return "Xin chào bạn có giới tính nam";
    });
    Route::get('nu', function () {
        return "Xin chào bạn có giới tính nữ";
    });
});

Route::get('callcontroller', 'App\Http\Controllers\MyController@Hello');

Route::get('callcontroller/{name}', 'App\Http\Controllers\MyController@Languages');

Route::get('testview', 'App\Http\Controllers\MyController@testView');

Route::get('getuser/{name}', 'App\Http\Controllers\MyController@viewName');

Route::get('myrequest', 'App\Http\Controllers\MyController@getURL');

Route::get('getform', 'App\Http\Controllers\MyController@getForm');

Route::post('postform', 'App\Http\Controllers\MyController@postForm');

Route::get('uploadfile', 'App\Http\Controllers\MyController@getUpload');
Route::post('uploadfile', 'App\Http\Controllers\MyController@postUploadFile');
