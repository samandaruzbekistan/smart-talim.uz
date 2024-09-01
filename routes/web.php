<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::post('/chat', 'App\Http\Controllers\ChatController');

Route::get('/', function () {
    return view('user.index');
})->name('home');


Route::get('/cyber-security', function () {
    return view('user.information.information_course');
})->name('information');

Route::get('/cyber-security/1', function () {
    return view('user.information.themes.1');
})->name('information.1');

Route::get('/cyber-security/2', function () {
    return view('user.information.themes.2');
})->name('information.2');

Route::get('/cyber-security/3', function () {
    return view('user.information.themes.3');
})->name('information.3');


Route::get('/dreamweaver', function () {
    return view('user.dreamweaver.dreamweaver_course');
})->name('dreamweaver');

Route::get('/dreamweaver/1', function () {
    return view('user.dreamweaver.themes.1');
})->name('dreamweaver.1');

Route::get('/dreamweaver/2', function () {
    return view('user.dreamweaver.themes.2');
})->name('dreamweaver.2');



Route::get('/web', function () {
    return view('user.web.web_course');
})->name('web');

Route::get('/web/1', function () {
    return view('user.web.themes.1');
})->name('web.1');

Route::get('/web/2', function () {
    return view('user.web.themes.2');
})->name('web.2');

Route::get('/web/3', function () {
    return view('user.web.themes.3');
})->name('web.3');


Route::get('/graphics', function () {
    return view('user.graphics.graphics_course');
})->name('graphics');

Route::get('/graphics/1', function () {
    return view('user.graphics.themes.1');
})->name('graphics.1');

Route::get('/graphics/2', function () {
    return view('user.graphics.themes.2');
})->name('graphics.2');



Route::get('/multimedia', function () {
    return view('user.multimedia.multimedia_course');
})->name('multimedia');

Route::get('/multimedia/1', function () {
    return view('user.multimedia.themes.1');
})->name('multimedia.1');

Route::get('/multimedia/2', function () {
    return view('user.multimedia.themes.2');
})->name('multimedia.2');

Route::get('/multimedia/3', function () {
    return view('user.multimedia.themes.3');
})->name('multimedia.3');

Route::get('/multimedia/4', function () {
    return view('user.multimedia.themes.4');
})->name('multimedia.4');



Route::get('/excel', function () {
    return view('user.excel.excel_course');
})->name('excel');

Route::get('/excel/1', function () {
    return view('user.excel.themes.1');
})->name('excel.1');

Route::get('/excel/2', function () {
    return view('user.excel.themes.2');
})->name('excel.2');

Route::get('/excel/3', function () {
    return view('user.excel.themes.3');
})->name('excel.3');

Route::get('/excel/4', function () {
    return view('user.excel.themes.4');
})->name('excel.4');




Route::get('/internet', function () {
    return view('user.internet.internet_course');
})->name('internet');

Route::get('/internet/1', function () {
    return view('user.internet.themes.1');
})->name('internet.1');

Route::get('/internet/2', function () {
    return view('user.internet.themes.2');
})->name('internet.2');

Route::get('/internet/3', function () {
    return view('user.internet.themes.3');
})->name('internet.3');

Route::get('/internet/4', function () {
    return view('user.internet.themes.4');
})->name('internet.4');

Route::get('/internet/5', function () {
    return view('user.internet.themes.5');
})->name('internet.5');

Route::get('/internet/6', function () {
    return view('user.internet.themes.6');
})->name('internet.6');



Route::get('/operating', function () {
    return view('user.operating_systems.operating_systems_course');
})->name('operating');

Route::get('/operating/1', function () {
    return view('user.operating_systems.themes.1');
})->name('operating.1');

Route::get('/operating/2', function () {
    return view('user.operating_systems.themes.2');
})->name('operating.2');

Route::get('/operating/3', function () {
    return view('user.operating_systems.themes.3');
})->name('operating.3');

Route::get('/operating/4', function () {
    return view('user.operating_systems.themes.4');
})->name('operating.4');

Route::get('/operating/5', function () {
    return view('user.operating_systems.themes.5');
})->name('operating.5');



Route::get('/computers', function () {
    return view('user.computers.computers_course');
})->name('computers');

Route::get('/computers/1', function () {
    return view('user.computers.themes.1');
})->name('computers.1');

Route::get('/computers/2', function () {
    return view('user.computers.themes.2');
})->name('computers.2');

Route::get('/computers/3', function () {
    return view('user.computers.themes.3');
})->name('computers.3');

Route::get('/computers/4', function () {
    return view('user.computers.themes.4');
})->name('computers.4');
