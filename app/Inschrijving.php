<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inschrijving extends Model
{
    protected $table = 'inschrijvingen';

    protected $fillable = ['naam', 'mail', 'hogeschool','vakgebied'];

    public function sessies()
    {
        return $this->belongsToMany('App\Sessie');
    }
}
