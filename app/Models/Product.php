<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'name',
        'slug',
        'excerpt',
        'description',
        'price',
        'stock',
        'image',
        'category_id'
    ];

    protected $casts = [
        'image' => 'array'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getRouteKey()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
