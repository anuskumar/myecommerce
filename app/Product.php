<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $guarded = [''];
    public $timestamps = false;

    public function category(){

        return $this->belongsTo(Category::class);
    }
    public function images(){

        return $this->hasMany(ProductImage::class);
    }
}
