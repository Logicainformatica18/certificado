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
        Schema::table('registries', function (Blueprint $table) {
           $table->date("date_certification")->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
               Schema::table('registries', function (Blueprint $table) {
             $table->dropColumn('date_certification');
        });
         
    }
};
