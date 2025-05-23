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
        Schema::create('files', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('description')->nullable();
        $table->string('file_path');
        $table->boolean('permission')->default(0);
        $table->string('category')->default('سایر');
        $table->foreignId('subject_id')->nullable()->constrained()->restrictOnDelete();
        $table->foreignId('study_field_id')->nullable()->constrained('study_fields')->restrictOnDelete();
        $table->foreignId('user_id')->constrained()->restrictOnDelete();
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('files');
    }
};
