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
        Schema::create('contact_messages', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();;
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();;
            $table->string('number')->nullable();
            $table->text('message')->nullable();;
            $table->tinyInteger('status')->default(1)->comment('1 = new/unread, 0 = reviewed');
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
        Schema::dropIfExists('contact_messages');
    }
};
