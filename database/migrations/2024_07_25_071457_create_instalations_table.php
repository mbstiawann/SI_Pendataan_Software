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
        Schema::create('instalations', function (Blueprint $table) {
            $table->id();
            $table->text('note');
            $table->enum('solved', ['done', 'notyet']);
            $table->date('date_instalation');
            $table->foreignId('asisten_id')->constrained(
                table: 'asistens',
                indexName: 'instalations_asisten_id'
            );
            $table->foreignId('software_id')->constrained(
                table: 'softwares',
                indexName: 'instalations_software_id'
            );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instalations');
    }
};
