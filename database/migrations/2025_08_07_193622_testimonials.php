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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('quote')->nullable();
            $table->string('client_name')->nullable();
            $table->string('client_position')->nullable(); // e.g., Residential/Commercial
            $table->string('image')->nullable(); // e.g., 5 Katha
            $table->integer('image_positon')->nullable(); // e.g., 1200 sqft
            $table->boolean('status')->default(1); // 1 = Active, 0 = Inactive
            $table->unsignedBigInteger('updated_by_id')->nullable();
            $table->string('updated_by_name')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
