<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeeController extends Controller
{
    public function index() {
        return view('HalamanUtama');
    }
}
