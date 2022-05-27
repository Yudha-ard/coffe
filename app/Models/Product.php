<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'product_weight',
        'price',
        'description',
    ];

    public function product(){
        return $this->hasOne(Transaction::class, 'product_id');
    }
}
