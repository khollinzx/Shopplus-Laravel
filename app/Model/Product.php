<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id', 'title', 'description', 'photo', 'price',
    ];

    // Setting Up the relationship class btw Category and Post
    public function category()
    {
        return $this->belongsTo(Category::class, "category_id");
    }
}
