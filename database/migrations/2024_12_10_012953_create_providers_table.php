<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->id();

            $table->string('business_name');
            $table->string('maternal_last_name');
            $table->string('paternal_last_name');
            $table->string('rut');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('account_number');
            $table->string('bank_name');
            $table->string('account_type');
            $table->boolean('status')->default(true);
            $table->string('type');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('providers');
    }
};
