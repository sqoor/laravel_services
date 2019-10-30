<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index() {
        $services = Service::paginate(10);

        return view('services.index', compact('services'));
    }

    public function show($id) {
        $service = Service::findOrFail($id);

        return view('services.service', compact('service'));
    }

}
