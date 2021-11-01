<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\GigController;
use Illuminate\Support\Facades\DB;

class AttendanceController extends Controller
{
    
    //
    public function re()
    {
        return "It works";
    }
    
    public function create(){
        return view('create');
    }

    public function handle(){
        //validation
        $userId = auth()->user()->id;
        // ddd($userId);

        // $validate = request()->validate([
        //     'user_id' => 'required',
        //     'gig_id' => 'max:50',
        // ]);
         
        // save to database
        

       Attendance::create(['gig_id'=>request('gig_id'), 'user_id'=>$userId]); 


        //redirect
        return redirect()->route('gigs');
    }

    public function isAttending()
    {
        if(  DB::table('attendances')->where('gig_id', $this->id)->where('user_id', auth()->user()->id)->exists()){
            return true;
        }
        else
        return false;
    }
}
