<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Pricing extends Model
{
    use HasFactory, HasUlids;

    public function tradeOffer()
    {
        return $this->belongsTo(TradeOffer::class);
    }

    public function pricable(): MorphTo
    {
        return $this->morphTo();
    }
}
