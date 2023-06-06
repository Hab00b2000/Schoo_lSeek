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
        Schema::create('schools', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('name',150);
            $table->string('email',150);
            $table->string('password',50);
            $table->string('website',200)->nullable();
            $table->string('address',150)->nullable();
            $table->string('phone',50)->nullable();
            $table->string('image',250)->nullable();
            $table->string('disc',500)->nullable();
            $table->unsignedBigInteger('typeId');
            $table->unsignedBigInteger('generId');
            $table->timestamps();

           /*  $table->foreign('typeId')
                  ->references('id')
                  ->on('types')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('generId')
                  ->references('id')
                  ->on('geners')
                  ->onDelete('cascade')
                  ->onUpdate('cascade'); */      
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schools');
    }
};
