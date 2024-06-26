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
        Schema::create('l2_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name_cat');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->timestamps();

            $table->index('category_id', 'category_l2_category_idx');
            $table->foreign('category_id', 'category_l2_category_fk')->on('categories')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('l2_categories');
    }
};
