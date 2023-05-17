<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'day',
        'start_time',
        'end_time',
        'limit_time',
    ];
    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    
}
