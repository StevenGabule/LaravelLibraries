<?php

namespace App\Http\Controllers\GeneratePDF;
use App\Http\Controllers\Controller;
use App\UserDetail;
use PDF;
use Illuminate\Http\Request;

class UserDetailController extends Controller
{
    public function store(Request $request){

        $user = new UserDetail([
            'full_name' => $request->get('full_name'),
            'street_address' => $request->get('street_address'),
            'city' => $request->get('city'),
            'zip_code' => $request->get('zip_code')
        ]);

        $user->save();
        return redirect('/index');
    }
    public function index(){

        $users = UserDetail::all();
        return view('GeneratesPDF.index', compact('users'));
    }

    public function downloadPDF($id)
    {
        $users = UserDetail::all();
        $pdf = PDF::loadView('GeneratesPDF.pdf', compact('users'));
        return $pdf->download('invoice.pdf');
    }
}
