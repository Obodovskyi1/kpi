<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCharacteristics extends Model
{
    protected $fillable = [
        'post_id',
        'characteristic_text',
    ];
    public $timestamps = false;

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

}
