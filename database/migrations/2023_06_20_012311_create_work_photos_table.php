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
        Schema::create('work_photos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('work_id')->constrained(
                table: 'works', indexName: 'files_work_id'
            )->cascadeOnUpdate()->cascadeOnDelete();
            $table->longText('filename_1');
            $table->longText('filename_2')->nullable();
            $table->longText('filename_3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_photos');
    }
};
