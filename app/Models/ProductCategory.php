<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'type',
        'description',
        'image',
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}
