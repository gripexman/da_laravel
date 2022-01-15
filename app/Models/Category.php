<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	  protected $fillable = ['category_id','name'];


      public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function category()
    {
          return $this->belongsTo(Category::class, 'category_id', 'id');
    }

}