<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GigController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store()
    {
        //save to database

    }
}
