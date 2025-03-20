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
        Schema::create('cart', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('product_id');
            $table->integer('quantity');
            $table->timestamps(); //automatically adds created_at and updated_at
            $table->softDeletes(); //adds a deleted_at column to the table

            // Add foreign key constraints manually
            $table->foreign('customer_id')->references('id')->on('customer')->onDelete('cascade');
            //his defines a foreign key relationship between the customer_id column in the cart table and the id column in the customer table.
            //onDelete('cascade') part ensures that if a customer is deleted, all the corresponding cart entries are also deleted automatically.
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart');
    }
};
