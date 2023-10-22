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
        Schema::create('items_menu', function (Blueprint $table) {
            $table->id();
            $table->foreignId('menu_id');
            $table->string('item_name');
            $table->string('link')->nullable();
            $table->foreignId('parrent_item_id')->nullable();
            $table->timestamps();
            $table->string('image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items_menu');
    }
};
