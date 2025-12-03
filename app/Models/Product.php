<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'icon',
        'vlt',
        'uvr',
        'irr',
        'tser',
        'short_desc',
        'item_desc',
        'price_desc',
        'price',
        'full_desc',
        'spec_desc',
        'maintenance_desc',
        'img1',
        'img2',
        'img3',
        'img4',
        'img5',
        'term_desc',
    ];

    /**
     * Relasi dengan ProductType (One to Many)
     */
    public function types()
    {
        return $this->hasMany(ProductType::class);
    }
}
