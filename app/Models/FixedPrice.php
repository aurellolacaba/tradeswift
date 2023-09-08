<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class FixedPrice extends Model
{
    use HasFactory, HasUlids;

    public function pricing(): MorphOne
    {
        return $this->morphOne(Pricing::class, 'pricable');
    }

    public function tradeOffer()
    {
        return $this->pricing->hasOne(TradeOffer::class);
    }
}
