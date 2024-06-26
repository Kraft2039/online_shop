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
        Schema::create('l3_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name_cat');
            $table->unsignedBigInteger('l2_category_id')->nullable();
            $table->timestamps();

            $table->index('l2_category_id', 'l2_category_l3_category_idx');
            $table->foreign('l2_category_id', 'l2_category_l3_category_fk')->on('l2_categories')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('l3_categories');
    }
};
