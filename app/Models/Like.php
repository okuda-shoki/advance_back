<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public function shops()
    {
        return $this->belongsTo(Shop::class);
    }
}
