<?php

namespace App\Model;
use Illuminate\Support\Str;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
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

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
