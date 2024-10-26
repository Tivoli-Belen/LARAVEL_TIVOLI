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
        Schema::create('resume', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('job_title');
            $table->text('about');
            $table->string('email');
            $table->string('phone');
            $table->string('location');
            $table->longText('tertiary');
            $table->longText('secondary');
            $table->longText('primary');
            $table->string('civil_status');
            $table->string('birth');
            $table->string('age');
            $table->string('religion');
            $table->string('nationality');
            $table->string('gender');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resume');
    }
};
