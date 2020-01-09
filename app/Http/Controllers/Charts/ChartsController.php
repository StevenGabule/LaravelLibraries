<?php

namespace App\Http\Controllers\Charts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChartsController extends Controller
{
    public function index()
    {
        return view('charts.index');
    }
}
