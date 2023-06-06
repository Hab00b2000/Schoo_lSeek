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
        Schema::create('teachers', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->unsignedBigInteger('staffId');
            $table->unsignedBigInteger('sslId');
            $table->timestamps();

            /* $table->foreign('staffId')
                  ->references('id')
                  ->on('staff')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            
            $table->foreign('sslId')
                  ->references('id')
                  ->on('s_s_l_s')
                  ->onDelete('cascade')
                  ->onUpdate('cascade'); */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
