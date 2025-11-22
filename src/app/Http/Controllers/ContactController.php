<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function admin(){
        return view('hello');
    }

    public function index()
    {
        // ここで表示する画面を決める
        return view('home');
    }
}