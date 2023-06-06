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
        Schema::create('children', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('name',150)->nullable();
            $table->string('Fname',150)->nullable();
            $table->string('Mname',150)->nullable();
            $table->timestamp('birthday')->nullable();
            $table->string('bornplace',150)->nullable();
            $table->string('gener',50)->nullable();
            $table->unsignedBigInteger('userId');
            $table->timestamps();

            /* $table->foreign('userId')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade')
                  ->onUpdate('cascade'); */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('children');
    }
};
