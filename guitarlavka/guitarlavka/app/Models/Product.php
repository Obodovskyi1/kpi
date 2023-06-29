<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_name',
		'product_type',
		'product_price',
        'product_description',
        'product_main_img',
    ];

    public $timestamps = false;
    
    public function additional_images(){
        return $this->hasMany(AdditionalImage::class);
    }

	public function characteristics(){
        return $this->hasMany(ProductCharacteristics::class);
    }
}
