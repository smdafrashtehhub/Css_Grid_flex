<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlexGrid extends Controller
{
    public function gfsite1()
    {
        return view('grid-flex-site1.gfsite1');
    }
    public function features()
    {
        return view('grid-flex-site1.features');
    }
    public function docs()
    {
        return view('grid-flex-site1.docs');
    }
}
