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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->string('image');
            $table->string('code')->unique();
            $table->string('name')->unique();
            $table->string('barcode')->unique();
            $table->string('title');
            $table->text('description');
            $table->bigInteger('buy_price');
            $table->bigInteger('sell_price');
            $table->integer('stock');
            $table->integer('min_stock');
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
