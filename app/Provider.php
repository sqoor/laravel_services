<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    //
    protected $fillable = ['title', 'description', 'price', 'location', 'time'];

    public function providers()
    {
        return $this->belongsTo('App\Service');
    }

    public function proposal()
    {
        return $this->hasOne('App\Proposal');
    }
}
