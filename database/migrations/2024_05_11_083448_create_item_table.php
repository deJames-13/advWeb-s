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
        Schema::create('item', function (Blueprint $table) {
            $table->id('item_id');
            $table->string('description');
            $table->decimal('sell_price', 8, 2);
            $table->decimal('cost_price', 8, 2);
            $table->string('img_path');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orederinfo');
        Schema::dropIfExists('stock');
        Schema::dropIfExists('item');
    }
};
