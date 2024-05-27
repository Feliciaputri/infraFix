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
        Schema::create('bookmarks', function (Blueprint $table) {
            $table->timestamps();

            $table->foreignId('user_id')->constrained('user', 'id')->onDelete('cascade');
            $table->foreignId('case_id')->constrained('case', 'id')->onDelete('cascade');

            $table->primary(['user_id', 'case_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookmarks');
    }
};
