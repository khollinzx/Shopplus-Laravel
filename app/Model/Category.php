<?php

namespace App\Model;

use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public  $incrementing = false;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) Str::uuid();
        });
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
