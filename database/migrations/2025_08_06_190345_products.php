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
            $table->string('division')->nullable();
            $table->string('district')->nullable();
            $table->string('type')->nullable(); // e.g., Residential/Commercial
            $table->string('land_area')->nullable(); // e.g., 5 Katha
            $table->integer('apartment_size')->nullable(); // e.g., 1200 sqft
            $table->integer('untis')->nullable(); // spelling kept as per model
            $table->integer('parking_size')->nullable(); // e.g., number of parking spaces
            $table->string('title')->nullable();
            $table->text('descripiton')->nullable(); // typo in field kept as per model
            $table->string('address')->nullable();
            $table->string('image')->nullable(); // image path
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
        Schema::dropIfExists('products');
    }
};
