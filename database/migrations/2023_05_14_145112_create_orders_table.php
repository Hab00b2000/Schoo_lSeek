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
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->unsignedBigInteger('docId');
            $table->unsignedBigInteger('schoolId');
            $table->boolean('accept')->nullable();
            $table->timestamps();

            /* $table->foreign('docId')
                  ->references('id')
                  ->on('documents')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('schoolId')
                  ->references('id')
                  ->on('schools')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');  */     
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
