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
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('certification_id')->unsigned();
            $table->foreign('certification_id')->references('id')->on('certifications');
                 $table->string('ask');
                 $table->string('alternative1');
                 $table->string('alternative2');
                 $table->string('alternative3');
                 $table->string('alternative4');
                  $table->string('answer');
                
            $table->string('detail')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exams');
    }
};
