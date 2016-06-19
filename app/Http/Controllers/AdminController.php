<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }


    public function home()
    {
        return view('admin.home');
    }
    
};