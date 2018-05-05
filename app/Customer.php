<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Sale;

class Customer extends Model
{
    protected $fillable = ['username', 'phone'];

    public function sales () {
        return $this->hasMany(Sale::class);
    }
}
