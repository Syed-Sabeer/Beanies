<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products'; // Define the table name
    protected $fillable = ['title', 'description', 'base_images', 'visibility'];

    protected $casts = [
        'base_images' => 'array', // Automatically cast base_images as an array
    ];

    public function productColors()
    {
        return $this->hasOne(ProductColor::class, 'product_id');
    }

    // Keep the hasOne relationship if only one pricing record per product
    public function productPricing()
    {
        return $this->hasOne(ProductPricing::class, 'product_id');
    }



}
