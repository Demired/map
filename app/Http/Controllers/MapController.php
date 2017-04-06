<?php

namespace App\Http\Controllers;

use Mockery\Tests\React_ReadableStreamInterface;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\vps;

class MapController extends Controller
{
    public function index()
    {
        $vpss = Vps::all();


        return view('index', compact('vpss'));

    }

    public function map()
    {
        $res = vps::all();
        return view('map', compact('res'));
    }

    public function add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nickname' => 'required|min:5|max:50',
            'ip' => 'required|unique:vps|ip',
            'website' => 'required|url',
            'continent' => 'required|max:10',
            'accounts' => 'required|max:10',
            'country' => 'required|max:10',
            'province' => 'required|max:10',
            'city' => 'required|max:10',
            'lat' => 'required',
            'lng' => 'required',
            'startTime' => 'required|date_format:Y-n-d',
            'billing' => 'required|max:10',
            'status' => 'required|max:10',
        ]);
        if ($validator->fails())
        {
            return redirect('/add')
                ->withErrors($validator)
                ->withInput();
        }
        Vps::create($request->all());
        return redirect('/');
    }
}
