<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    const STATUS_PENDING = 0;
    const STATUS_CHECKIN = 1;
    const STATUS_CHECKOUT = 2;
    const STATUS_CANCEL = 3;

    const PAID_STATUS_UNPAID = 0;
    const PAID_STATUS_PAID = 1;

    protected $table = "bookings";

    protected $fillable = [
        'customer_id',
        'room_id',
        'check_in',
        'check_out',
        'start_date',
        'end_date',
        'total_night',
        'total_price',
        'total_person',
        'paid_status',
        'status',
        'no_booking',
        'is_review',
        'bukti_upload',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
