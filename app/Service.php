<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['title', 'description', 'price', 'location', 'time', 'rating_provider', 'rating_client', 'categories', 'client_id'];

    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function provider()
    {
        return $this->hasOne('App\Provider');
    }

    public function proposals()
    {
        return $this->hasMany('App\Proposal');
    }
}
