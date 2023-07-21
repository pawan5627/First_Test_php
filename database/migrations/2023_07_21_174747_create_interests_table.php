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
        Schema::create('interest', function (Blueprint $table) {
            //
            $table->id();
            $table->boolean('Reading');
            $table->boolean('Video Games');
            $table->boolean('Sports');
            $table->boolean('Travelling');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interest');
    }
};
