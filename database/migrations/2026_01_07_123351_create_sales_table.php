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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cashier_id');
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->boolean('ppn')->nullable()->default('0');
            $table->string('invoice');
            $table->bigInteger('cash');
            $table->bigInteger('change');
            $table->bigInteger('discount');
            $table->bigInteger('ppn_total');
            $table->bigInteger('total');
            $table->bigInteger('grand_total');
            $table->timestamps();

            //relationship users
            $table->foreign('cashier_id')->references('id')->on('users');

            //relationship customers
            $table->foreign('customer_id')->references('id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
