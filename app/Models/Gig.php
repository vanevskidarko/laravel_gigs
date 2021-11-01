<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gig extends Model
{
    use HasFactory;
    protected $guarded = [];

    //gig_user
    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();

    }

    public function isAttending()
    {
        // $this->users(); //all users that are attending to this gig
        // DB::table('attendances')->where('gig_id', $this->id)->exists();

        $currentUser = auth()->user()->id;
        return $this->users->contains($currentUser);
    }
}
