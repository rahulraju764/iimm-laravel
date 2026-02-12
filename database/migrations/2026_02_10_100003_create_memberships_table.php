<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('memberships', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->string('gender')->nullable();
            $table->string('organization')->nullable();
            $table->string('designation')->nullable();
            $table->text('office_address')->nullable();
            $table->string('office_phone')->nullable();
            $table->string('qualification')->nullable();
            $table->string('work_experience')->nullable();
            $table->string('work_designation')->nullable();
            $table->date('dob')->nullable();
            $table->string('aadhar')->nullable();
            $table->string('email');
            $table->string('cheque_number')->nullable();
            $table->date('payment_date')->nullable();
            $table->decimal('amount', 10, 2)->nullable();
            $table->boolean('proof_attached')->default(false);
            $table->boolean('is_read')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('memberships');
    }
};
