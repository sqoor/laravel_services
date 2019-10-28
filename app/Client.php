<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['name', 'email', 'password', 'image'];

    public function services()
    {
        return $this->hasMany('App\Service');
    }

}
