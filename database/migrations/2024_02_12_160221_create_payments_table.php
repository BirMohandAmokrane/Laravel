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
        //payments(id,amount,date,payment_method,#order_id,created_at,updated_at)

        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->double("amount");
            $table->dateTime("date");
            $table->string("payment_method",10);

            //cle etrangere
            $table->unsignedBigInteger('order_id');
            $table->forign('order_id')->references('id')->on('orders');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
