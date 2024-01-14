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
        Schema::create('table_custom_colluns', function (Blueprint $table) {
            $table->id();
            $table->string('table');
            $table->string('column');
            $table->string('type');
            $table->integer('size');
            $table->string('default')->default('null');
            $table->string('cssclass')->default('form-control');
            $table->string('inputtype')->default('text');
            $table->integer('csscolsize')->default('12');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_custom_colluns');
    }
};
