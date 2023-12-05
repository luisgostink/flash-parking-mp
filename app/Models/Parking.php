<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}