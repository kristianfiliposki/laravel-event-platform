<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class netflix extends Model
{
    use HasFactory;
    public function netflix()
    {
        return $this->hasMany(User::class);
    }
}
