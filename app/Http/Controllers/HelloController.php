<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function hello($message){
    $message;
    return view('greeting/index', ['message' => $message]);
    }
}
