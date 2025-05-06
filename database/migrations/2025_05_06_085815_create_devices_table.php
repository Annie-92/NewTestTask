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
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->string('code', 12)->unique();
            $table->string('name');
            $table->string('sku')->nullable();
            $table->string('serial_number');
            $table->text('address');
            $table->string('order_number');
            $table->boolean('warranty')->default(0);
            $table->text('warranty_description')->nullable();
            $table->date('delivery_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devices');
    }
};
