<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    protected $fillable = [
        'title', 'slug', 'category', 'author', 'excerpt', 'body',
        'image_url', 'is_published', 'published_at',
    ];

    protected $casts = [
        'is_published'  => 'boolean',
        'published_at'  => 'datetime',
    ];

    public static function boot(): void
    {
        parent::boot();
        static::creating(function (self $blog) {
            $blog->slug = $blog->slug ?: Str::slug($blog->title);
        });
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true)->orderByDesc('published_at');
    }
}
