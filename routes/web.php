<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


use App\Client;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/data', function () {
//    $client = \App\client::findOrFail(1);
//    $providers = \App\Provider::all();
//    $client = \App\client::findOrFail(1);
//    return $client->services()->get(); // data

//    $client = \App\Client::findOrFail(1);
//    $service = $client->services()->get();
//    $service_id = $service[0]->id;


//    $client = \App\Client::findOrFail(1);
//    $service = $client->services()->get();
////    $test = $service[0]->propsals();
//    $service= \App\Client:::where('Service', function ($q1)use($)
//    dd($service);
//return $service;

//    $articleId = 1;
//
//    $users = \App\Client::whereHas('services', function ($q1) use ($articleId) {
//        $q1->where('client_id', $articleId);
//    })->get();

});
