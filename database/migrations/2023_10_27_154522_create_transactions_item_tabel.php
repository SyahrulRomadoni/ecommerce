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
        Schema::create('transactions_item', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('transactions_id')->notNullable();
            $table->unsignedBigInteger('product_id')->notNullable();
            $table->integer('quantity')->notNullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions_item');
    }
};
