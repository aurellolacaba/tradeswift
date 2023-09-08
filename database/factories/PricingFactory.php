<?php

namespace Database\Factories;

use App\Models\FixedPrice;
use App\Models\TradeOffer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pricing>
 */
class PricingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'trade_offer_id' => TradeOffer::factory()->create(),
            'min_trade_limit' => fake()->randomFloat(2, 500, 600),
            'max_trade_limit' => fake()->randomFloat(2, 10000, 50000),
            'time_limit' => 30, // 30 minutes
            'pricable_id' => function () {
                return FixedPrice::factory();
            },
            'pricable_type' => FixedPrice::class
        ];
    }
}
