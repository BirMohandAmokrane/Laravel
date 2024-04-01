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
        //order_lines(id, #product_id,quantity,price,#order_id,created_at,updated_at)

        Schema::create('order-lines', function (Blueprint $table) {
            $table->id();
            $table->integer("quantity");
            $table->double("price");
            // cle etrangere
            $table->UnsignedBigInteger('prodect-id');
            $table->forign("prodect-id")->references('id')->on('products');
            $table->UnsignedBigInteger('order_id');
            $table->forign("order_id")->references('id')->on('orders');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order-lines');
    }
};
