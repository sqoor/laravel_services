<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    //
    protected $fillable = ['status', 'service_id', 'provider_id'];

    public function services()
    {
        return $this->hasMany('App\service');
    }

    public function providers()
    {
        return $this->hasMany('App\Provider');
    }
}
