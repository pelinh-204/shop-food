<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
    use HasFactory;
    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
    public function variant(){
        return $this->hasMany(Variant::class,'product_id');
    }

    public function sale(){
        return $this->belongsTo(Sale::class,'sale_id');
    }

}
