<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class MarketPrice extends Model
{
    use HasFactory;

    public function pricing(): MorphOne
    {
        return $this->morphOne(Pricing::class, 'pricable');
    }
}
