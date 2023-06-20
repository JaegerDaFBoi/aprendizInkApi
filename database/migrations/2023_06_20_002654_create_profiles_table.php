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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(
                table: 'users', indexName: 'profile_user_id'
            )->cascadeOnUpdate()->cascadeOnDelete();
            $table->date('birthdate')->nullable();
            $table->longText('bio')->nullable();
            $table->text('country')->nullable();
            $table->text('city')->nullable();
            $table->boolean('has_profile_photo');
            $table->longText('profile_photo_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
