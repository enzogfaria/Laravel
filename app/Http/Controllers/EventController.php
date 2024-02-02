<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    
    public function index() {
        $nome = "Jorge";
        $idade = 29;

        $arr = [10,20,30,40,50];

        return view('welcome', ["nome" => $nome]);
    }
    
    public function create() {
        return view('events.create');
    }
}
