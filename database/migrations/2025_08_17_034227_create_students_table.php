<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
            public function up(): void
            {
                Schema::create('students', function (Blueprint $table) {
                    $table->id(); // unsignedBigInteger auto
                    $table->string('name', 30);
                    $table->integer('age');
                    $table->string('email', 40)->nullable()->unique();
                    $table->string('phone', 30)->nullable();
                    $table->string('address', 100)->nullable();
                    $table->string('city', 50)->nullable();
                    $table->string('password', 100)->nullable();
                    $table->timestamps();
                });
            }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
