<?php

namespace App\Http\Controllers;

use App\Client;
use App\Service;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function dashboard()
    {
        //  $logged_user = Auth::user();

        $user = Client::findOrFail(1); // logged user id;
        $services = $user->services()->get();

        return view('client.dashboard', compact('services'));
    }

    public function create()
    {
        return view('client.create-service');
    }

    public function save(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'location' => 'required',
            'time' => 'required',
            'category' => 'required'
        ]);

        Service::create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'location' => $request->location,
            'time' => $request->time,
            'category' => $request->category,
            'client_id' => 1 // the authenticated user id (logged user id)
        ]);

        return redirect('/dashboard');
    }
}
