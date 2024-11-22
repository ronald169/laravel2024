<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Classe extends Model
{

    public $timestamps = false;

    protected $fillable = ['title', 'slug', 'order'];

    public function courses(): HasMany
    {
        return $this->hasMany(Course::class);
    }
}
