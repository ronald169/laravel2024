<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'user_id',
        'score',
        'lesson_id',
        'active',
        'image',
        'seo_title',
        'meta_description',
        'meta_keywords',
        'pinned',
    ];

    public function quizQuestions(): HasMany
    {
        return $this->hasMany(QuizQuestion::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
