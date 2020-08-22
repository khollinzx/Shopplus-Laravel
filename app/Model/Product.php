<?php

namespace App\Model;

use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public  $incrementing = false;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) Str::uuid();
        });
    }
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
