<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'artikel_id',
        'name',
    ];

    /**
     * Relasi dengan Artikel (Belongs To)
     */
    public function artikel()
    {
        return $this->belongsTo(Artikel::class);
    }
}
