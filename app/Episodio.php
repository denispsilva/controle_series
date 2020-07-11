<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episodio extends Model
{

    public $fillable = ['numero'];
    public $timestamps = false;

    public function temporadas(){
        return $this->belongsTo(Temporada::class);
    }
}
