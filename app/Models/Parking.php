<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parking extends Model
{   
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'blocked_until',
        'ev_charging',
        'latitude',
        'longitude',
        'map_frame',
    ];
}