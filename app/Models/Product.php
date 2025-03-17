<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductSEO;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'products'; // Define the table name
    protected $fillable = ['title','slug', 'description', 'visibility', 'is_pompom'];

    public function productColors()
    {
        return $this->hasMany(ProductColor::class, 'product_id');
    }

    public function productSEO()
    {
        return $this->hasOne(ProductSEO::class, 'product_id');
    }
    
    public function componentColors()
    {
        return $this->hasManyThrough(
            ComponentProductColor::class,   // Final model
            ProductColor::class,           // Intermediate model
            'product_id',                  // Foreign key on ProductColor
            'id',                          // Foreign key on ComponentProductColor
            'id',                          // Local key on Product
            'color_id'                     // Local key on ProductColor
        );
    }

    public function productPricing()
    {
        return $this->hasMany(ProductPricing::class, 'product_id'); // Updated to hasMany for multiple pricing options
    }

    public function productBaseImages()
    {
        return $this->hasMany(ProductBaseImage::class, 'product_id'); // Relationship with base images
    }
    public function discountCoupons()
    {
        return $this->morphMany(DiscountCoupon::class, 'discountable');
    }
}
