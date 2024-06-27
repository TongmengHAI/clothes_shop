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
            $table->string('name');
            $table->float('reqular_price');
            $table->float('sale_price');
            $table->String('thumbnail');
            $table->string('color');
            $table->string('size');
            $table->longText('description');
            $table->string('author');
            $table->decimal('viewer')->nullable()->default(0);
            $table->decimal('category_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_products');
    }
};
