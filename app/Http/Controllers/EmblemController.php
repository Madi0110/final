<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmblemController extends Controller
{
    public function index(){
        return view('emblem');
    }
}
