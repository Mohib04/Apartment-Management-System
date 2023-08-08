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
        Schema::create('utilities', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->id();
            $table->string('floor_no')->nullable(false);
            $table->string('unit_no')->nullable(false);
            $table->string('owner_name', 100)->nullable(false);
            $table->string('utility_month')->nullable(false);
            $table->string('utility_year')->nullable(false);
            $table->decimal('water_bill')->nullable(false);
            $table->decimal('electric_bill')->nullable(false);
            $table->decimal('gas_bill')->nullable(false);
            $table->decimal('security_bill')->nullable(false);
            $table->decimal('utility_bill')->nullable(false);
            $table->decimal('total_rent')->nullable(false);
            $table->date('issue_date')->nullable(false);
            $table->decimal('other_bill');
            $table->string('status')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utilities');
    }
};
