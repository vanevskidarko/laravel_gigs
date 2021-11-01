<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\GigController;


class Attendance extends Model
{
    protected $guarded = [];

    use HasFactory;
    public function attendance()
    {
        return $this->belongsToMany(Attendance::class)->withTimestamps();
    }

    // public function isAttending()
    // {
    //     if(  DB::table('attendances')->where('gig_id', $this->id)->where('user_id', auth()->user()->id)->exists())
    // }
}
