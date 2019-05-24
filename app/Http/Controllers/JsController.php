<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JsController extends Controller
{
    public function index(){

      return view('practicejs');
    }

    public function index2(){

      return view('index');
    }
}
