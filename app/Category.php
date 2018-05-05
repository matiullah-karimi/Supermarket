<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Item;

class Category extends Model
{
    
    public function items() {
        return $this->hasMany(Item::class);
    }
}
