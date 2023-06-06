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
        Schema::create('notes', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->unsignedBigInteger('userId')->nullable();
            $table->unsignedBigInteger('orderId');
            $table->string('disc',500)->nullable();
            $table->timestamps();

           /*  $table->foreign('orderId')
                  ->references('id')
                  ->on('orders')
                  ->onDelete('cascade')
                  ->onUpdate('cascade'); */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};
