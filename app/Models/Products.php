<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected  $table = "products";
    protected $fillable = [
        'category_id',
        'name',
        'price',
        'sale_price',
        'brands',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo(Categories::class);
    }
}
