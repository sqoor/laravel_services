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
use App\Provider;
use App\Service;
use App\Proposal;

Route::get('/', function () {
    return view('welcome');
});


function insert_data()
{
    Client::create([
        'name' => 'Abdullah Alsqoor',
        'email' => 'alsqoor@gmail.com',
        'password' => 'password',
        'image' => 'url'
    ]);

    Provider::create([
        'name' => 'Abdullah Alsqoor',
        'email' => 'alsqoor@gmail.com',
        'password' => 'password',
        'age' => '26',
        'image' => 'url'
    ]);

    Service::create([
        'title' => 'House Cleaning',
        'description' => 'House Cleaning',
        'price' => '10',
        'location' => 'Amman',
        'time' => new DateTime(),
        'rating_provider' => '0',
        'rating_service' => '0',
        'category' => 'cleaning',
        'client_id' => 1
//    'provider_id' => ,
    ]);


    Proposal::create([
        'provider_id' => 1,
        'service_id' => 1
//        'is_accepted' => 0
    ]);

}

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

//    insert_data();

//    $client_id = Client::findOrFail(1)->get()[0]->id;
////    return $client_id;
//    $services = Service::where('client_id', $client_id)->get()[0];
////    return $services;
//    $proposals = Proposal::where('service_id', $services->id)->get()[0];
////    return $proposals;
//    $providers = Provider::where('id', $proposals->provider_id)->get();
//    return $providers[0]->name;


//    $user_id = 1;
//
//    $users = Client::whereHas('services', function ($q1) use ($user_id) {
//        $q1::whereHas('proposals', function ($q2) use ($user_id) {
//            dd($q2);
//        });
//
//    })->get();
//
//    return $users;


    $services = Client::with('services')->where('id', 1)->get()[0]->services;

    foreach ($services as $service) {
//        echo $service . "<br><br><br>";
        echo 'service ------------------------------------------------<br>';
        $service_id = $service->id;
        $proposal = Service::with('proposals')->where('id', $service_id)->get();
        echo $proposal . "<br><br><br>";

    }
});
