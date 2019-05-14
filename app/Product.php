<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function sizes()
    {
        return $this->belongsToMany(Size::class, 'product_sizes', 'product_id', 'size_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function toArray()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'price' => intval($this->price / 100),
            'fav' => true,
            'rating' => 4.5,
            'image' => asset($this->image),
            'description' => strip_tags($this->description)
        ];
    }
}
