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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('ClientName', 100);
            $table->string('phone', 25);
            $table->string('email', 100);
            $table->string('website', 500);
            // $table->string('city', 30);
            $table->string('image', 100);
            $table->string('active');
            $table->foreignId('city_id')->constrained('cities');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};