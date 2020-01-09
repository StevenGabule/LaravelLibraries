<?php

namespace App\Http\Controllers\Charts;

use App\Coin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CoinController extends Controller
{
    public function home()
    {
        return view('charts.index');
    }
    public function index()
    {
        $coins = DB::table('coins')
            ->where('name','=','Bitcoin')
            ->orderBy('year', 'ASC')
            ->get();
        return response()->json($coins);
    }


    public function store(Request $request)
    {
        $coin = new Coin();
        $coin->name = $request->name;
        $coin->year = $request->year;
        $coin->price = $request->price;
        $coin->save();
        return response()->json(['success' => 'Coin has been successfully added'], 200);
    }
}
