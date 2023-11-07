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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('form_id')->constrained('forms');

            // price car
            $table->string('price');

            $table->enum('type', ['FIRST', 'SECOND']);
            $table->string('first_name');
            $table->string('last_name');
            $table->string('date');
            $table->string('amount');
            $table->string('image_path');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
