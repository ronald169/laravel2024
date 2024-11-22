<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Serie extends Model
{
    public $timestamps = false;

    protected $fillable = ['title', 'slug'];

    public function series(): HasMany
    {
        return $this->hasMany(Serie::class);
    }
}
