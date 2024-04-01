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
        //orders(id,number,date,#customer_id,status,created_at,updated_at)

        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string("number",20)->nullable()->unique()->digits();
            $table->dateTime("date");
            $table->string("status",10);
            // clé etrangere
            $table->unsignedBigInteger('customer_id');
            $table->foreign("customer_id")->references("id")->on("customers");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
