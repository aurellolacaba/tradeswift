<?php

namespace Database\Factories;

use App\Models\Pricing;
use App\Models\TradeOffer;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TradeOffer>
 */
class TradeOfferFactory extends Factory
{

    public function definition(): array
    {
        return [
            'user_id' => User::factory()->create(),
            'trade_type' => Arr::random(['buy', 'sell']),
            'crypto' => Arr::random(['BTC', 'ETH', 'USDT']),
            'preferred_currency' => Arr::random(['PHP', 'USD']),
            'payment_method' => Arr::random(['GCASH', 'PAYPAL'])
        ];
    }

    public function sell(): Factory
    {
        return $this->state(function (array $attributes){
            return [
                'trade_type' => 'sell'
            ];
        });
    }

    public function buy(): Factory
    {
        return $this->state(function (array $attributes){
            return [
                'trade_type' => 'buy'
            ];
        });
    }

    public function btc(): Factory
    {
        return $this->state(function (array $attributes){
            return [
                'crypto' => 'BTC'
            ];
        });
    }

    public function eth(): Factory
    {
        return $this->state(function (array $attributes){
            return [
                'crypto' => 'ETH'
            ];
        });
    }

    public function usdt(): Factory
    {
        return $this->state(function (array $attributes){
            return [
                'crypto' => 'USDT'
            ];
        });
    }
}
