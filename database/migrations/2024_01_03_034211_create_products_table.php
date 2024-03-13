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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('Name',50);
            $table->string('Made_IN',50);
            $table->string('Condiction',20);
            $table->decimal('Price');
            $table->string('Picture');
            $table->unsignedBigInteger('Warranty');
            $table->date('Posted');
            $table->unsignedBigInteger('CateID');
            $table->unsignedBigInteger('ShopID');
            $table->foreign('CateID')->references('id')
            ->on('categories')->onDelete('cascade');
            $table->foreign('ShopID')->references('id')
            ->on('shops_profile')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};


