<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_name'
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}