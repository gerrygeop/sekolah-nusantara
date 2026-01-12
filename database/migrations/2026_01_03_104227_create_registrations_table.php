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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('school_unit_id')->nullable()->constrained()->nullOnDelete();
            $table->string('registration_number')->unique();
            $table->string('full_name');
            $table->string('gender'); // L/P
            $table->string('place_of_birth');
            $table->date('date_of_birth');
            $table->string('nik')->nullable();
            $table->text('address')->nullable();
            
            $table->string('phone')->nullable();
            $table->string('email')->nullable();

            $table->string('father_name')->nullable();
            $table->string('father_job')->nullable();
            $table->string('father_phone')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('mother_job')->nullable();
            $table->string('mother_phone')->nullable();

            $table->string('previous_school')->nullable();
            $table->text('previous_school_address')->nullable();
            $table->string('graduation_year')->nullable();
            $table->decimal('average_grade', 5, 2)->nullable();

            $table->string('status')->default('pending'); // pending, approved, rejected
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
