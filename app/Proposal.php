<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    //
    protected $fillable = ['is_accepted'];

    public function services()
    {
        return $this->hasMany('App\service');
    }

    public function providers()
    {
        return $this->hasMany('App\Provider');
    }
}
