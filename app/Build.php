<?php

namespace Dota2;

use Illuminate\Database\Eloquent\Model;

class Build extends Model
{
    /**
     *  The table associated with the model.
     */
    protected  $table = 'builds';



    public function user(){

        return $this->belongsTo('Dota2\User');
    }


    public function items()
{
    return $this->hasMany('Dota2\Item');
}
    public function hero()
    {
        return $this->hasOne('Dota2\Hero');
    }
}
