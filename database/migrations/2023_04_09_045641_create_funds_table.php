<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('funds', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->id();
            $table->string('owner_name', 100)->nullable(false);
            $table->string('month')->nullable(false);
            $table->string('year')->nullable(false);
            $table->date('date')->nullable(false);
            $table->decimal('total_amount')->nullable(false);
            $table->text('purpose')->nullable(false);
            $table->string('status')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funds');
    }
};
