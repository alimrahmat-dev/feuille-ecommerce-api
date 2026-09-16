<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['user_id','shipping_address_id','status','total_amount','payment_methode'])]
class Order extends Model
{
    public function user(){

    return $this->belongsTo(User::class,'user_id');
    }
    public function shippingAddress(){

    return $this->belongsTo(shippingAddress::class,'shippingAddress');
    }
}
