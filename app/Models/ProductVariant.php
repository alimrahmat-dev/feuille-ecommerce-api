<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['product_id', 'sku', 'color', 'size', 'additional_price', 'stock'])]
class ProductVariant extends Model
{
    public function product()
    {

        return $this->belongsTo(Product::class, 'product_id');
    }
}
