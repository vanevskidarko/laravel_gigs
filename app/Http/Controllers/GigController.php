<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gig;
use Illuminate\Support\Facades\DB;
use app\Models\Attendance;



class GigController extends Controller
{
    public function index() {
        
        $gigs = Gig::all();

        return view('index', ['gigs'=>$gigs]);


    }

    public function create(){
        return view('create');
    }

    public function store(){

        //validation

        $validate = request()->validate([
            'name' => 'required',
            'band_name' => 'max:50',
            'genre' => 'required'
        ]);
         
        // save to database

        Gig::create(['name'=>request('name'), 'band_name'=>request('band_name'), 'artist_id'=>auth()->user()->id, 'genre'=>request('genre')]);

        //redirect
        return redirect()->route('gigs');
    }
}
