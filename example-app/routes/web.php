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
/*была проблема пока не прописал полный путь до контроллера */
Route::post('/contact/submit', 'App\Http\Controllers\ContactController@submit')->name('contact-form');

