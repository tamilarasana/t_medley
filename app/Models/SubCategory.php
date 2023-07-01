<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }
}
