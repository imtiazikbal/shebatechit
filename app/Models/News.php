<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class News extends Model
{
    protected $fillable = [
        'title', 'slug', 'excerpt', 'body',
        'image', 'is_published', 'published_at',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'published_at' => 'datetime',
    ];

    public static function boot(): void
    {
        parent::boot();
        static::creating(function (self $news) {
            $news->slug = $news->slug ?: Str::slug($news->title);
        });
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true)->orderByDesc('published_at');
    }
}
