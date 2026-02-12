<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('gender')->nullable();
            $table->text('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email');
            $table->date('dob')->nullable();
            $table->string('qualification_file')->nullable();
            $table->string('employer_info')->nullable();
            $table->string('course_name')->nullable();
            $table->string('referral_source')->nullable();
            $table->date('application_date')->nullable();
            $table->decimal('fee_amount', 10, 2)->nullable();
            $table->string('cheque_number')->nullable();
            $table->date('payment_date')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('payment_proof_file')->nullable();
            $table->string('proof_attached')->nullable();
            $table->boolean('is_read')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
