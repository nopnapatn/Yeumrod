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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('car_id')->constrained('cars');

            $table->string('pick');
            $table->string('drop');
            $table->string('check_in');
            $table->string('check_out');
            $table->integer('date_difference');
            $table->enum('status', ['PARTIALLY', 'ON TRIP', 'PENDING', 'END TRIP', 'CANCEL']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
