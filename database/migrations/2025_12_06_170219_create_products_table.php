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
            // ! Step 01: Create The table schema and Migrate it
            $table->id();
            $table->string("name");
            $table->decimal("price", 6, 2); 
            // ! 6 digits total between them 2 decimal places 
            // * Ex. ____.__ 9999.99, 986.87, 21.40
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
