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

Route::get('/contact/all/{id}/update',
    'App\Http\Controllers\ContactController@updateMessage')
    ->name('contact-update');

/* создаем обработчик url адресса */
/*была проблема пока не прописал полный путь до контроллера */
Route::get('/contact/all/{id}',
    'App\Http\Controllers\ContactController@showOneMessage')
    ->name('contact-data-one');

Route::post('/contact/all/{id}/update',
    'App\Http\Controllers\ContactController@updateMessageSubmit')
    ->name('contact-update-submit');

Route::get('/contact/all/{id}/delete',
    'App\Http\Controllers\ContactController@deleteMessage')
    ->name('contact-delete');

Route::get('/contact/all', 'App\Http\Controllers\ContactController@allData')->name('contact-data');
Route::post('/contact/submit', 'App\Http\Controllers\ContactController@submit')->name('contact-form'); /* '/contact/submit' - когда переходим по этому адрессу мы получаем все данные из формы */

