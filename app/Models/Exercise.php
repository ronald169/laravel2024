<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Exercise extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'solution',
        'score',
        'user_id',
        'lesson_id',
        'active',
        'image',
        'seo_title',
        'meta_description',
        'meta_keywords',
        'pinned'
    ];

    public function lesson(): BelongsTo
    {
        return $this->belongsTo(Lesson::class);
    }
}
