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

use App\Inschrijving;
use App\Sessie;
use Carbon\Carbon;

Route::get('/', function () {
/*    $sessie = Sessie::create(['title' => 'test','body' => 'testbody']);
    $inschrijvingen = Inschrijving::create(['naam' => 'test','mail' => 'test','hogeschool' => 'test','vakgebied' => 'test',]);
    $inschrijvingen->sessies()->attach($sessie->id);*/
    return view('index');
});


Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

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
    $all1 = Sessie::where('sessie',1)->get();
    $filtered1 = $all1->filter(function ($item) {
        return $item->max_inschrijvingen > count($item->inschrijvingen);
    });
    $sessies1 = [''=>''] + $filtered1->lists('title','id')->all();;
    $all2 = Sessie::where('sessie',2)->get();
    $filtered2 = $all2->filter(function ($item) {
        return $item->max_inschrijvingen > count($item->inschrijvingen);
    });
    $sessies2 = [''=>''] + $filtered2->lists('title','id')->all();;
    return view('inschrijven',compact('sessies1','sessies2'));
});

Route::post('/inschrijven', 'PagesController@inschrijven');

Route::get('/inschrijven/verstuurd', function () {
    return view('bedankt');
});

Route::get('/download',['middleware' => 'auth.basic', function () {
    $inschrijvingen = Inschrijving::all();
    Excel::create('Inschrijvingen'. Carbon::now(), function($excel) use($inschrijvingen){
        $excel->sheet('Sheet 1', function($sheet) use($inschrijvingen) {
            $sheet->fromArray($inschrijvingen);
        });
    })->download('xls');
}]);
