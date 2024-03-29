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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable(false);
            $table->string('name')->nullable(false);
            $table->string('email')->unique();
            $table->string('mobile_number')->nullable(false);
            $table->string('additional_mobile_number')->nullable();
            $table->date('dob')->nullable(false);
            $table->string('designation')->nullable(false);
            $table->string('nid')->nullable();
            $table->string('passport')->nullable();
            $table->string('nationality')->nullable(false);
            $table->string('gender')->nullable(false);
            $table->string('permanent_address')->nullable(false);
            $table->string('image_path')->nullable();
            $table->text('additional_info')->nullable();
            $table->string('status')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
