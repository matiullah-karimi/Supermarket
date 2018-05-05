<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Customer;
use App\Item;

class Sale extends Model
{
    public function customer() {
        return $this->belongsTo(Customer::class);
    }

    public function item() {
        return $this->belongsTo(Item::class);
    }
}
