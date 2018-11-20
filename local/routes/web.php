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
	return view('index');
});
Route::get('/contact_us', function () {
	return view('contact');
});
Route::get('/intro', function () {
    return view('intro');
});
// Route::get('/contact_us', function () {
//     return view('contact');
// });
// Route::get('/contact_us', function () {
//     return view('contact');
// });
// Route::get('/contact_us', function () {
//     return view('contact');
// });
Route::get('who-we-are', function () {
	return view('who-we-are');
})->name('who-we-are');
