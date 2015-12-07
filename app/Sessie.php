<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sessie extends Model
{
    protected $table = 'sessies';

    protected $fillable = ['title', 'body', 'max_inschrijvingen'];

    public function inschrijvingen()
    {
        return $this->belongsToMany('App\Inschrijving');
    }
}
