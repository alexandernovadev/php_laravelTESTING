<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'name'
    ];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value);
    }

    public function getSlugAttribute()
    {
        return str_replace(' ','-',$this->name);
    }

    public function href()
    {
        return "blog/$this->slug";
    }
}
