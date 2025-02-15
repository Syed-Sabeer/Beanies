<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartArtwork extends Model
{
    use HasFactory;

    protected $table = 'cart_artwork'; // Specify the correct table name

    protected $fillable = [
        'cart_id',
        'artwork_type',
        'artwork_dataText',
        'artwork_dataImage',
        'patch_length',
        'patch_height',
        'font_style',
        'num_of_imprint',
        'imprint_color',
        'leathercolor',
    ];

    /**
     * The attributes that should be cast to native types.
     */
    protected $casts = [
        'imprint_color' => 'array',
        'patch_length' => 'float',
        'patch_height' => 'float',
    ];

    /**
     * Relationship with Cart
     * Fetch the cart associated with this artwork
     */
    public function cart()
    {
        return $this->belongsTo(Cart::class, 'cart_id');
    }
}
