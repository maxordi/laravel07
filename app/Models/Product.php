<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'category_id', 'price', 'img', 'status', 'description'];

    protected $casts = [
        'status' => 'boolean',
        'properties' => 'array'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function getPagePriceAttribute(){
        return $this->attributes['price'] / 100;
    }

    public function setPriceAttribute($value){
         $this->attributes['price'] = $value * 100;
    }

    public function scopeActive($query){
        $query->where('status',1);
    }

    public function scopeFilter($query, array $categories = []){

        if ($categories){
            $query->whereIn('category_id', $categories);
        }

    }
}

