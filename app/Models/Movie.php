<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    public function Movie(){
        return 
            $this->belongTo(netflix::class);
            $this->hasMany(Category::class);

    }
}