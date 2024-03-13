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
        Schema::create('maintain_docs', function (Blueprint $table) {
            $table->id();
            $table->string('Docs_Path');
            $table->string('Desc');
            $table->unsignedBigInteger('ModelID');
            $table->foreign('ModelID')->references('id')
            ->on('carmodels')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintain_docs');
    }
};
