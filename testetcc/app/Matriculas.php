<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matriculas extends Model
{
    protected $fillable = ['eventos_id','user_id','presenca'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo = possui um Evento
     * uma matricula possui um Evento
     */
    public function eventos()
    {
        return $this->belongsTo('App\Eventos');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
   
}
