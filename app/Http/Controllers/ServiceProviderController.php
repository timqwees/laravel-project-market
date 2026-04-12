<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceProviderController extends Controller
{
    public function create()
    {
        return view('service.create');
    }

    public function store(Request $request)
    {
        //
    }
}
