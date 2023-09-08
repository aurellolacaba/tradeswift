<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TradeOffer extends Model
{
    use HasFactory, HasUlids;

    public function pricing()
    {
        return $this->hasOne(Pricing::class);
    }
}
