<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;

class MapController extends BaseController
{
    public function index()
    {
        $vpss = DB::select('select * from vps');

        return view('index', compact('vpss'));
    }

    public function map()
    {
        return view('map');
    }

    public function add()
    {

    }
}
