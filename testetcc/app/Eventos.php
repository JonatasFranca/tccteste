<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class eventos extends Model
{
    protected $fillable = ['nomeeventos','valoreventos','arquivoeventos','datainicioeventos','dataterminoeventos','image'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany = possui muitos
     * Um Evento possui muitas Matriculas
     */
    public function matriculas()
    {
        return $this->hasMany('App\Matriculas');
    }
    
}
