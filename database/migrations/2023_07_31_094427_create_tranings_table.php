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
        Schema::create('tranings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title');
            $table->string('date');
            $table->string('dates');
            $table->text('skills') -> default('[]');
            $table->boolean('status') -> default(true);
            $table->boolean('trash') -> default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tranings');
    }
};
