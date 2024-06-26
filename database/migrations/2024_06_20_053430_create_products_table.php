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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name_prod');
            $table->integer('price');
            $table->unsignedBigInteger('l2_category_id');
            $table->unsignedBigInteger('l3_category_id');
            $table->timestamps();

            $table->index('l2_category_id', 'l2_category_product_idx');
            $table->foreign('l2_category_id', 'l2_category_product_fk')->on('l2_categories')->references('id');

            $table->index('l3_category_id', 'l3_category_product_idx');
            $table->foreign('l3_category_id', 'l3_category_product_fk')->on('l3_categories')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
