<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'transaction_total',
        'transaction_status',
        'delivery_receipt',
        'expedition',
        'total_weight',
        'product_id'
    ];


    public function user(){
        return $this->belongsTo(User::class,'users_id');
    }
    public function product(){
        return $this->belongsTo(Product::class, 'product_id');
    }
}
