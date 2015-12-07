<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Sessie;
use Illuminate\Http\Request;

Route::get('/', function () {
/*    $sessie = Sessie::create(['title' => 'test','body' => 'testbody']);
    $inschrijvingen = Inschrijving::create(['naam' => 'test','mail' => 'test','hogeschool' => 'test','vakgebied' => 'test',]);
    $inschrijvingen->sessies()->attach($sessie->id);*/
    return view('index');
});

Route::get('/programma', function () {
    return view('programma');
});

Route::get('/sessie', function () {
    return view('sessie');
});

Route::get('/fotos', function () {
    return view('fotos');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/inschrijven', function () {
    $sessies = Sessie::lists('title','id');
    return view('inschrijven',compact('sessies'));
});

Route::post('/inschrijven', 'PagesController@inschrijven');

Route::get('/inschrijven/verstuurd', function () {
    return view('bedankt');
});
