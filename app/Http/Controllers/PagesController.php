<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Inschrijving;
use App\Sessie;
use Illuminate\Http\Request;
use Mail;

class PagesController extends Controller
{
    public function inschrijven(Request $request){
        $this->validate($request, [
            'sessie1' => 'required',
            'sessie2' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'hogeschool' => 'required',
            'vakgebied' => 'required',
        ]);

        $sessie1 = Sessie::findOrFail($request->sessie1);
        $sessie2 = Sessie::findOrFail($request->sessie2);

        $inschrijving = Inschrijving::create(['naam' => $request->name,'mail' => $request->email,'hogeschool' => $request->hogeschool,'vakgebied' => $request->vakgebied]);
        $inschrijving->sessies()->attach($request->sessie1);
        $inschrijving->sessies()->attach($request->sessie2);

        Mail::send('emails.inschrijving', ['email' => $request,'sessie1' => $sessie1,'sessie2' => $sessie2], function ($message) use ($request) {
            $message->from('info@congrestechnischebedrijfskunde.nl', 'Congres Technische Bedrijfskunde');
            $message->to($request->email);
            $message->subject('Bedankt voor uw inschrijving');
        });

/*        Mail::raw($request->sessie1, function ($message) use($request) {
            $message->from('info@congrestechnischebedrijfskunde.nl', 'Congres Technische Bedrijfskunde');
            $message->to('mail@jellebreuer.com');
            $message->subject('Bedankt voor uw inschrijving');
        });*/

        return redirect('/inschrijven/verstuurd');
    }

}