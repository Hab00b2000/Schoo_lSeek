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
        Schema::create('s_s_l_s', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->unsignedBigInteger('slId');
            $table->unsignedBigInteger('subjectId');
            $table->timestamps();

            /* $table->foreign('slId')
                  ->references('id')
                  ->on('school_levels')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('subjectId')
                  ->references('id')
                  ->on('subjects')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');   */    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('s_s_l_s');
    }
};
