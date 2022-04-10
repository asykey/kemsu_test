<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DataStoreRequest;

class SiteController extends Controller
{
    public function create()
    {
        return view('welcome');
    }

    public function store(DataStoreRequest $request)
    {
        dd($request->all());
    }
}
