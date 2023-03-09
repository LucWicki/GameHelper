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
        Schema::create('user', function (Blueprint $table) {
            $table->id('user_id');
            $table->timestamps();


            $table->string('firstname');
            $table->string('lastname');
            $table->string('username');
            $table->string('profile_picture')->nullable();
            $table->string('email');
            $table->string('password', 8);
            $table->integer('ar');
            $table->string('server');
            $table->integer('genshin_uid');
            $table->string('user_description', 150);
            $table->unsignedBigInteger('gallery_id')->nullable();
            $table->foreign('gallery_id')->references('gallery_id')->on('gallery')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');


    }
};
