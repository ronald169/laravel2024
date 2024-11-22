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
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->mediumText('content');
            $table->tinyInteger('order')->unsigned()->nullable();

            $table->boolean('active')->default(true);

            $table->string('image')->nullable();
            $table->string('seo_title')->nullable();
            $table->text('meta_description');
            $table->text('meta_keywords');
            $table->boolean('pinned')->default(false);

            $table->foreignId('course_id')
                ->constrained()
                ->nullOnDelete();
            $table->foreignId('user_id')
                ->constrained()
                ->nullOnDelete();

            $table->unsignedBigInteger('parent_id')->nullable()->default(null);
            $table->foreign('parent_id')
                ->references('id')
                ->on('lessons')
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
        Schema::dropIfExists('lessons');
    }
};
