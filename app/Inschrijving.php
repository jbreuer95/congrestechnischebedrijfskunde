<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inschrijving extends Model
{
    protected $table = 'inschrijvingen';

    protected $fillable = ['naam', 'mail', 'hogeschool','vakgebied'];

    protected $appends = ['sessie1','sessie2'];

    public function sessies()
    {
        return $this->belongsToMany('App\Sessie');
    }

    public function getSessie1Attribute()
    {
        return $this->attributes['Sessie 1'] = $this->sessies()->where('sessie',1)->lists('title')[0];
    }

    public function getSessie2Attribute()
    {
        return $this->attributes['Sessie 2'] = $this->sessies()->where('sessie',2)->lists('title')[0];
    }


}
