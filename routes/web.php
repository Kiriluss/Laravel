<?php
use Illuminate\Support\Facades\Route;
Route::get('posts/{id}', [App\Http\Controllers\Page::class,"showi"]);
Route::get('posts', [App\Http\Controllers\Page::class,"showOne"]);
Route::get('posts/cat/{id}', [App\Http\Controllers\product::class,"howOne"]);
Route::get('posts/cat/{id}/{product_id}', [App\Http\Controllers\product::class,"wOne"]);
Route::get('test/result', [App\Http\Controllers\Test::class,"form"]);
Route::post('test/result', [App\Http\Controllers\Test::class,"form"]);
Route::match(['get','post'],'test/result/{id}/{ib}', [App\Http\Controllers\Test::class,'formupdate']);
Route::match(['get','post'],'test/result/result/', [App\Http\Controllers\TestController::class,'show']);

Route::get('test/show1', [App\Http\Controllers\TestController::class,"form"]);
Route::match(['get','post'],'test/result', [App\Http\Controllers\Test::class,'form']);
Route::get('cokie/set', [App\Http\Controllers\form::class,'setCookie']);
Route::get('cokie/get', [App\Http\Controllers\form::class,'getCookie']);


