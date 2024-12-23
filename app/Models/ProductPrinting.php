<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPrinting extends Model
{
    use HasFactory;

    // Specify the table name (optional if it follows Laravel's naming convention)
    protected $table = 'product_printing';

    // Specify the primary key (optional if it follows Laravel's naming convention)
    protected $primaryKey = 'id';

    // Allow mass assignment for these fields
    protected $fillable = [
        'title',
        'image',
        'quantity',
        'price',
    ];

    // Automatically manage timestamps
    public $timestamps = true;

    // Cast specific attributes
    protected $casts = [
        'quantity' => 'array', // JSON data will be automatically cast to and from an array
        'price' => 'array',    // JSON data will be automatically cast to and from an array
    ];
}
