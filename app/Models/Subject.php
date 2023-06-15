<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;



class Subject extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    
    public function students(): BelongsToMany
    {
        return $this->BelongsToMany(Students::class, "student_subjects");
    }

    public function subjectSettings(): HasMany
    {
        return $this->hasMany(SubjectSetting::class);
    }

    

    
}
