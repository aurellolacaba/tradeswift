<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pricings', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignUlid('trade_offer_id');
            $table->string('min_trade_limit');
            $table->string('max_trade_limit');
            $table->string('time_limit');
            $table->ulidMorphs('pricable');
            $table->timestamps();

            $table->foreign('trade_offer_id')
                ->references('id')
                ->on('trade_offers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pricings');
    }
};
