<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    public function shop()
    {
        return $this->hasMany(Shop::class);
    }
}
