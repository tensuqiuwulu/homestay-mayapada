<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brandbook extends Model
{
    use HasFactory;

    protected $table = 'brandbook';

    protected $fillable = [
        'lang',
        'link'
    ];
}
