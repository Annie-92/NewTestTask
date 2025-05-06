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
        Schema::create('engineering_contacts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('device_id')->constrained('devices')->onDelete('cascade');
            $table->string('company_name');
            $table->string('technician_name');
            $table->string('contact_phone')->nullable();
            $table->string('email')->nullable();
            $table->text('notes')->nullable();
            $table->string('error_title')->nullable();
            $table->text('manual_file')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('engineering_contacts');
    }
};
