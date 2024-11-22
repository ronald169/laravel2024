<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class QuizQuestion extends Model
{
    use HasFactory;

    protected $casts = [
        'choices' => 'array', // JSON format for choices
    ];

    protected $fillable = [
        'question',
        'choices',
        'correct_answer',
        'explanation',
        'single_or_multiple',
        'user_id',
        'quiz_id',
    ];

    public function quiz(): BelongsTo
    {
        return $this->belongsTo(Quiz::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
