<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
public function home() {
    return view('main.index');
}

public function about() {
    return view('main.about');
}

public function dashboard() {
    return view('main.dashboard');
}

// public function services() {
//     return view('others.services');
// }

// public function why() {
//     return view('why');
// }

// public function team(){
//     return view('team');
// }
}
