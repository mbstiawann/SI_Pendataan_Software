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
        Schema::create('asistens', function (Blueprint $table) {
            $table->id();
            $table->string('nim')->unique();
            $table->string('name');
            $table->enum('sex', ['man', 'woman']);
            $table->text('address');
            $table->string('phone_number');
            $table->enum('study_program', ['Teknik Informatika', 'Sistem Informasi']);
            $table->string('image');
            $table->date('join_date');
            $table->foreignId('user_id')->constrained(
                table: 'users',
                indexName: 'asistens_user_id'
            );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asistens');
    }
};
