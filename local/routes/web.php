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
Route::get('/services', function () {
	return view('services');
});
Route::get('/clients', function () {
	return view('clients');

});
Route::get('/galary', function () {
	return view('galary');
});
Route::get('/strength', function () {
	return view('strength');
});
Route::get('/howitworks', function () {
	return view('howItWorks');
});
Route::get('/candidate', function () {
	return view('candidate');
});
Route::get('/clientPost', function () {
	return view('clientPost');
});
Route::get('/contact', function () {
	return view('contact');
});
Route::get('/jobs', function () {
	return view('jobs');
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
