<?php
use Illuminate\Support\Facades\Route;

/*обработчик url адресса*/
Route::get('/', function () {
    return view('home');
})->name('home');
/*обработчик url адресса*/
Route::get('/about', function () {
    return view('about');
})->name('about');
/*обработчик url адресса*/
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

/* создаем обработчик url адресса */
Route::post('/contact/submit', function () {
    return Request::all();
})->name('contact-form');


