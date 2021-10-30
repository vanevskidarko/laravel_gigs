<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $guarded = [];

    use HasFactory;
    public function attendance()
    {
        return $this->belongsToMany(Attendance::class)->withTimestamps();
    }
}
