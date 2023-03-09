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
        Schema::create('comtag', function (Blueprint $table) {
            $table->id('comtag_id');
            $table->timestamps();

            $table->unsignedBigInteger('commission_id')->nullable();
            $table->foreign('commission_id')->references('commission_id')->on('commission')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('tag_id')->nullable();
            $table->foreign('tag_id')->references('tag_id')->on('tags')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comtag');
    }
};
