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
            $table->string('order_id')->nullable();
            $table->string('name')->nullable();
            $table->string('image')->nullable();
            $table->string('type')->nullable();
            $table->string('status')->nullable();
            $table->text('short_description')->nullable();
            $table->longText('long_description')->nullable();
            $table->text('description')->nullable();
            $table->longText('gallery')->nullable();

            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('product_categories')->onDelete('cascade')->onUpdate('cascade');
            
            $table->timestamps();
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
