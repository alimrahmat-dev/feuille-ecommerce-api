<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
#[Fillable(['name','slug','parent_id'])]

class ProductCategory extends Model
{
    public function parent()
    {
       return $this->belongsToMany(ProductCategory::class,'parent_id');
    }
}
