<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GigController extends Controller
{
    public function create() {
        return view('create');
    }

    public function store() {
        // save to database
    }
}
