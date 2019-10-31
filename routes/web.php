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

Route::get('/dashboard', 'ClientController@dashboard')->name('dashboard');
Route::get('/dashboard/create', 'ClientController@create')->name('service.create');
Route::post('/dashboard/save', 'ClientController@save');
Route::get('/services/{service}', 'ClientController@show');
Route::get('/profile', 'ClientController@showProfile')->name('profile');

Route::get('/services', 'ServiceController@index')->name('services');
Route::get('/services/detail/{service}', 'ServiceController@show');



//Route::resource('home', 'ClientController');

Route::post('/propose/{service}', 'ProposalController@save');
Route::post('/propose/{proposal}/decline', 'ProposalController@remove');
Route::get('/proposals', 'ProposalController@show')->name('proposals');
Route::get('/clients/proposals', 'ProposalController@clientProposals')->name('client.proposals');
Route::get('/client/services/detail/{service}', 'ProposalController@clientProposal')->name('client.service');

Route::post('/proposal/accept/{proposal}', 'ProposalController@proposalAccept');
Route::post('/proposal/decline/{proposal}', 'ProposalController@proposalDecline');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
