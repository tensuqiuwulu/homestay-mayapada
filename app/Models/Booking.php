<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    const STATUS_PENDING = 0;
    const STATUS_CONFIRMED = 1;
    const STATUS_REJECTED = 2;

    protected $table = "bookings";

    protected $fillable = [
        'customer_id',
        'room_id',
        'check_in',
        'check_out',
        'status',
    ];
}
