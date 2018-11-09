<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('homepage');
})
    ->name('home')
;

Route::get('/home', function () {
    return view('homepage');
})
    ->name('home')
;

Route::get('/live', function () {
    return view('livepage');
})
    ->name('live')
;

Route::get('/photos', function () {
    return view('photospage');
})
    ->name('photos')
;

Route::get('/news', function () {
    return view('newspage');
})
    ->name('news')
;

Route::get('/merch', function () {
    return view('merchpage');
})
    ->name('merch')
;

Route::get('/contact', function () {
    return view('contactpage');
})
    ->name('contact')
;

//Route::get('/contact',	'FormController@showForm')
//    ->name('contact.form');



//Route::get('hello', function () {
//    return 'Hello';
//});
//
//Route::get('test', function () {
//    $data = array('Joe', 'Carl', 'Benny');
//    return $data;
//});
//
//Route::get('artikel/{naam}', function ($naam) {
//    return "Hier is artikel " . $naam;
//})
//    ->where('naam', '([a-zA-z\-])+')
//    ->name('artikel.show')
//;
//
//Route::get('artikel/{naam}', function ($naam) {
//    return "Hier is artikel " . $naam;
//})
//    ->where('naam', '([a-zA-z\-])+')
//    ->name('artikel.show_name')
//;

//Route::get('artikel/{naam}', 'ArticleController@show')
//
//    ->where('naam', '\d+')
//    ->name('artikel.show_name')
//;
//
//
//Route::get('/test', 'TestController@test');
