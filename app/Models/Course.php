<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Prompts\Concerns\Fallback;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'active',
        'image',
        'seo_title',
        'meta_description',
        'meta_keywords',
        'pinned',
        'user_id',
        'classe_id',
        'serie_id'
    ];

    public function classe(): BelongsTo
    {
        return $this->belongsTo(Classe::class);
    }

    public function serie(): BelongsTo
    {
        return $this->belongsTo(Serie::class);
    }

    public function lessons(): HasMany
    {
        return $this->hasMany(Lesson::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
