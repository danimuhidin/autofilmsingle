<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Artikel extends Model
{
    use HasFactory;

    protected $fillable = [
        'img_cover',
        'title',
        'slug',
        'content',
        'author',
    ];

    /**
     * Relasi dengan Tag (One to Many)
     */
    public function tags()
    {
        return $this->hasMany(Tag::class);
    }

    /**
     * Generate slug otomatis dari title
     */
    public static function boot()
    {
        parent::boot();

        static::creating(function ($artikel) {
            if (empty($artikel->slug)) {
                $artikel->slug = Str::slug($artikel->title);
            }
        });

        static::updating(function ($artikel) {
            if ($artikel->isDirty('title')) {
                $artikel->slug = Str::slug($artikel->title);
            }
        });
    }
}
