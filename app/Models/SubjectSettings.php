<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubjectSettings extends Model
{
    use HasFactory;
    protected $fillable = [
        'subject_id',
        'day',
        'start_time',
        'end_time',
        'limit_time',
    ];
    
}
