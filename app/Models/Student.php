<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lastname',
        'dni',
        'birthdate',
        'status',
    ];

    public function subjects(): BelongsToMany
    {
        return $this->BelongsToMany(Subject::class, "student_subjects");
    }

    public function careers(): HasMany
    {
        return $this->hasMany(Career::class);
    }

}
