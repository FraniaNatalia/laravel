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
Route::get('/index', function () {
    return view('index');
});
Route::get('/aanbod', function () {
    return view('aanbod');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/klanten', function () {
    return view('klanten');
});
Route::get('/nieuws', function () {
    return view('nieuws');
});
Route::get('/overbedrijf', function () {
    return view('overbedrijf');
});
Route::get('/portefeuille', function () {
    return view('portefeuille');
});
Route::get('/admin', function() {
    return view('admin');
});
Route::get('/404', function () {
    return abort(404);
});
Route::get('/admin/panel', function() {
    $petani = DB::table('todo')->get();
    return view('panel', ['petani' => $petani]);
});
Route::get('/admin/panel/Overbedrijfedit', function() {
    return view('Overbedrijfedit');
});
Route::get('/admin/panel/Aanbodedit', function() {
    return view('Aanbodedit');
});
Route::get('/admin/panel/Klantenedit', function() {
    return view('Klantenedit');
});
Route::get('/admin/panel/Portefeuilleedit', function() {
    return view('Portefeuilleedit');
});
Route::get('/admin/panel/Nieuwsedit', function() {
    return view('Nieuwsedit');
});
Route::get('/admin/panel/Blogedit', function() {
    return view('Blogedit');
});
Route::get('/admin/panel/Contactedit', function() {
    return view('Contactedit');
});