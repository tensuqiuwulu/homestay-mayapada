<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    const STATUS_AVAILABLE = 0;
    const STATUS_UNAVAILABLE = 1;

    protected $table = "rooms";

    protected $fillable = [
        'room_number',
        'status',
    ];
}
