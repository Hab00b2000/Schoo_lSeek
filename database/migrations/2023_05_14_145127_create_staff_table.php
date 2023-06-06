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
        Schema::create('staff', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('name',150)->nullable();
            $table->string('phone',50)->nullable();
            $table->string('typeOfWork',150)->nullable();
            $table->unsignedBigInteger('super')->nullable();
            $table->unsignedBigInteger('schoolId');
            $table->timestamps();

            /* $table->foreign('schoolId')
                  ->references('id')
                  ->on('schools')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            
            $table->foreign('super')
                  ->references('id')
                  ->on('staff')
                  ->onDelete('cascade')
                  ->onUpdate('cascade'); */      
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
