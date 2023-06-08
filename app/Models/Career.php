<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Career extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
      ];

      public function student(): BelongsTo
      {
        return $this->belongsTo(Student::class);
      }


}

