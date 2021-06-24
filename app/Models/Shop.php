<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public function areas()
    {
        return $this->belongsTo(Area::class);
    }
    public function genres()
    {
        return $this->belongsTo(Genre::class);
    }
}
