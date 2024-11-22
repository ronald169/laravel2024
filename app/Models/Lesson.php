<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'content',
        'order',
        'active',
        'image',
        'seo_title',
        'meta_description',
        'meta_keywords',
        'pinned',
        'course_id',
        'user_id'
    ];

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    public function exercises(): HasMany
    {
        return $this->hasMany(Exercise::class);
    }

    public function quizzes(): HasMany
    {
        return $this->hasMany(Quiz::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
