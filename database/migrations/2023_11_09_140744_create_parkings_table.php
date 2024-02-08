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
        Schema::create('parkings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->longText('name');
            $table->longText('address');
            $table->dateTime('blocked_until')->nullable();
            $table->boolean('ev_charging')->default(true);
            $table->float('latitude', 9, 6);
            $table->float('longitude', 9, 6);
            $table->longText('map_frame');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parkings');
    }
};
