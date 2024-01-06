<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = "reviews";

    protected $fillable = [
        'customer_id',
        'booking_id',
        'review',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
