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
                Schema::create('libraries', function (Blueprint $table) {
                    $table->id();
                    $table->foreignId('stu_id')
                        ->constrained('students')
                        ->onDelete('cascade');

                    $table->string('book');
                    $table->date('due_date')->nullable();
                    $table->boolean('status')->default(true);
                    $table->timestamps();
                });
            }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libraries');
    }
};
