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
        Schema::create('personal_infos', function (Blueprint $table) {
            $table->id()->nullable();
            $table->foreignId('user_id')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('profession');
            $table->string('email')->unique();
            $table->string('phone',18);
            $table->string('website');
            $table->string('address');
            $table->integer('post_code');
            $table->string('division');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_infos');
    }
};
