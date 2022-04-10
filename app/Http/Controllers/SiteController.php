<?php

namespace App\Http\Controllers;

use App\Http\Requests\DataStoreRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SiteController extends Controller
{
    public function create()
    {
        return view('welcome');
    }

    public function store(DataStoreRequest $request)
    {
        if (!Storage::exists('csv/data.csv')) {
            $data = "\xEF\xBB\xBF" . "ID;Имя;Вес;Цвет";
            Storage::put('csv/data.csv', $data);
        }
        $uuid = (string)Str::uuid();
        $data = "\xEF\xBB\xBF" . "$uuid;$request->name;$request->weight;$request->color";
        Storage::append('csv/data.csv', $data);
    }
}
