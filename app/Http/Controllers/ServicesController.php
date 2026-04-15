<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\header_option;
use App\Models\Services;


class ServicesController extends Controller
{
    public function services(){
         $header = header_option::all();
         $serv=Services::orderBy('id', 'asc')->get();
        //  dd($serv);
        return view('services',compact('header','serv'));
    }
}
