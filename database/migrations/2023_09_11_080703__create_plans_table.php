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
        Schema::create('plans', function (Blueprint $table) {
            // $table->unsignedInteger('id');
            $table->unsignedBigInteger('type_id');
            $table->string('Name')->primary();
            $table->double('Cost');
            $table->string('Detail');
            $table->integer('Duration');

           
            $table->foreign('type_id')->references('id')
            ->on('client_types')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
