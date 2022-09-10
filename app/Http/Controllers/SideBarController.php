<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SideBarController extends Controller
{

//Dashboard
    public function Dashboard(){
        return view('dashboard');
    }
    public function Customers(){
        return view('customers');
    }
    public function test(Request $request){
        $validator = Validator::make($request->all(),[
            "test"=>['required'],
        ]);

        if ($validator->fails()) {
            return redirect()->route('Dashboard')->withErrors($validator);
        }
        return redirect()->route('Dashboard');
    }

//Contact
    public function Contact(){
        return view('contact');

    }
//Product
    public function Product(){
        return view('product');

    }

//Statistics
    public function Report(){
        return view('report');
    }

}
