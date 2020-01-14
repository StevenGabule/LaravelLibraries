<?php

namespace App\Http\Controllers;

use App\Disneyplus;
use App\Exports\DisneyplusExport;
use App\Imports\DisneyplusImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class DisneyplusController extends Controller
{
    public function index()
    {
        $shows = Disneyplus::all();
        return view('GenrateExcel.index', compact('shows'));
    }

    public function create()
    {
        return view('GenrateExcel.form');
    }

    public function import(Request $request)
    {
        $this->validate($request, ['select_file'  => 'required|mimes:xls,xlsx']);
        $path = $request->file('select_file')->getRealPath();
         Excel::import(new DisneyplusImport, $path);
        return back()->with('success', 'Excel Data Imported successfully.');
    }

    public function export()
    {
        return Excel::download(new DisneyplusExport, 'disney.xlsx');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'show_name' => 'required|max:255',
            'series' => 'required|max:255',
            'lead_actor' => 'required|max:255',
        ]);
        Disneyplus::create($validatedData);
        return redirect('/disneyplus')->with('success', 'Disney Plus Show is successfully saved');
    }
}
