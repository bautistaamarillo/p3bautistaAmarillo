<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subjet extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'day',
        'start_time',
        'end_time',
        'limit_time',
    ];
}
