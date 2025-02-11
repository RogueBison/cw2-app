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
        Schema::create('cw2-fish', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('originalName',100);
            $table->string('path',100);
            $table->string('mimeType',100)->nullable();
            $table->string('title');
            $table->text('excerpt');
            $table->text('body');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fish');
    }
};
