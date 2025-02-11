<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductColor extends Model
{
    use HasFactory;

    protected $table = 'product_color';
    protected $fillable = ['product_id', 'color_id', 'image'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function componentColor()
    {
        return $this->belongsTo(ComponentProductColor::class, 'color_id'); // Ensure 'color_id' is correct
    }
    
}
