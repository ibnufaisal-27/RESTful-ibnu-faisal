<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name','description','enable'
    ];

    public function categoryProduct()
    {
        return $this->belongsTo(CategoryProduct::class,'id','product_id');
    }
    
    public function productImage()
    {
        return $this->belongsTo(ProductImage::class,'id','product_id');
    }
}
