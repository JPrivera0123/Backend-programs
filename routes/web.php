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


Route::get('/', 'PagesController@fibonacci');
Route::get('/palindrome', 'PagesController@palindrome');
Route::get('/numsort', 'PagesController@numsort');
Route::get('/anagram', 'PagesController@anagram');

Route::post('/', 'BackendController@fibonacci');
Route::post('/palindrome', 'BackendController@palindrome');
Route::post('/numsort', 'BackendController@numsort');
Route::post('/anagram', 'BackendController@anagram');





// Route::get('/', function () {
//     return view('index');
// });
//
// Route::get('/palindrome', function () {
//     return view('palindrome');
// });
//
//
// Route::get('/anagram', function () {
//     return view('anagram');
// });
//
//
// Route::get('/numsort', function () {
//     return view('numsort');
// });
