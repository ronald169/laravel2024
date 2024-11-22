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
        Schema::create('exercises', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->mediumText('content');
            $table->text('description')->nullable();
            $table->mediumText('solution')->nullable();
            $table->decimal('score', 5, 2)->unsigned();

            $table->boolean('active')->default(true);

            $table->string('image')->nullable();
            $table->string('seo_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->boolean('pinned')->default(false);

            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignId('lesson_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->unsignedBigInteger('parent_id')->nullable()->default(null);
            $table->foreign('parent_id')
                ->references('id')
                ->on('exercises')
                ->nullable()
                ->default(null);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercises');
    }
};
