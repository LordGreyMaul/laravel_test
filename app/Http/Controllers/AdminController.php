<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class admincontroller extends Controller
{
    public function home() {
        return view('admin.home');
    }
    public function createblog() {
        return view ('admin.createblog');
    }
}
