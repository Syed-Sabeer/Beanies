<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductColor extends Model
{
    use HasFactory;

    protected $table = 'product_color';
    protected $fillable = ['product_id', 'color', 'images'];

    protected $casts = [
        'color' => 'array',   // Automatically cast color as an array
        'images' => 'array',  // Automatically cast images as an array
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
