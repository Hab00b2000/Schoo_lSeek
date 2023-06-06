<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('types', function (Blueprint $table) {
            $table->unsignedBigInteger('gType')->change();
            $table->foreign('gType')
                  ->references('id')
                  ->on('types')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });

        Schema::table('notes', function (Blueprint $table) {
            $table->unsignedBigInteger('orderId')->change();
            $table->foreign('orderId')
                  ->references('id')
                  ->on('orders')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });

        Schema::table('infos', function (Blueprint $table) {
            $table->unsignedBigInteger('userId')->change();
            $table->foreign('userId')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });

        Schema::table('children', function (Blueprint $table) {
            $table->unsignedBigInteger('userId')->change();
            $table->foreign('userId')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });

        Schema::table('schools', function (Blueprint $table) {
            $table->unsignedBigInteger('typeId')->change();
            $table->foreign('typeId')
                  ->references('id')
                  ->on('types')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->unsignedBigInteger('generId')->change();
            $table->foreign('generId')
                  ->references('id')
                  ->on('geners')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');      
        });

        Schema::table('documents', function (Blueprint $table) {
            $table->unsignedBigInteger('childId')->change();
            $table->foreign('childId')
                  ->references('id')
                  ->on('children')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });

        Schema::table('school_levels', function (Blueprint $table) {
            $table->unsignedBigInteger('schoolId')->change();
            $table->foreign('schoolId')
                  ->references('id')
                  ->on('schools')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->unsignedBigInteger('levelId')->change();
            $table->foreign('levelId')
                  ->references('id')
                  ->on('levels')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');      
        });

        Schema::table('rates', function (Blueprint $table) {
            $table->unsignedBigInteger('schoolId')->change();
            $table->foreign('schoolId')
                  ->references('id')
                  ->on('schools')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });

        Schema::table('abouts', function (Blueprint $table) {
            $table->unsignedBigInteger('schoolId')->change();
            $table->foreign('schoolId')
                  ->references('id')
                  ->on('schools')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->unsignedBigInteger('schoolId')->change();
            $table->foreign('schoolId')
                  ->references('id')
                  ->on('schools')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->unsignedBigInteger('docId')->change();
            $table->foreign('docId')
                  ->references('id')
                  ->on('documents')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');      
        });

        Schema::table('staff', function (Blueprint $table) {
            $table->unsignedBigInteger('schoolId')->change();
            $table->foreign('schoolId')
                  ->references('id')
                  ->on('schools')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->unsignedBigInteger('super')->change();
            $table->foreign('super')
                  ->references('id')
                  ->on('staff')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');      
        });

        Schema::table('s_s_l_s', function (Blueprint $table) {
            $table->unsignedBigInteger('slId')->change();
            $table->foreign('slId')
                  ->references('id')
                  ->on('school_levels')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->unsignedBigInteger('subjectId')->change();
            $table->foreign('subjectId')
                  ->references('id')
                  ->on('subjects')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');      
        });

        Schema::table('teachers', function (Blueprint $table) {
            $table->unsignedBigInteger('sslId')->change();
            $table->foreign('sslId')
                  ->references('id')
                  ->on('s_s_l_s')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->unsignedBigInteger('staffId')->change();
            $table->foreign('staffId')
                  ->references('id')
                  ->on('staff')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');      
        });

        Schema::table('images', function (Blueprint $table) {
            $table->unsignedBigInteger('aboutId')->change();
            $table->foreign('aboutId')
                  ->references('id')
                  ->on('abouts')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::table('types', function (Blueprint $table) {
            $table->dropForeign(['gType']);
            $table->integer('gType')->unsigned()->change();
        });

        Schema::table('notes', function (Blueprint $table) {
            $table->dropForeign(['orderId']);
            $table->integer('orderId')->unsigned()->change();
        });

        Schema::table('infos', function (Blueprint $table) {
            $table->dropForeign(['userId']);
            $table->integer('userId')->unsigned()->change();
        });

        Schema::table('children', function (Blueprint $table) {
            $table->dropForeign(['userId']);
            $table->integer('userId')->unsigned()->change();
        });

        Schema::table('schools', function (Blueprint $table) {
            $table->dropForeign(['typeId']);
            $table->integer('typeId')->unsigned()->change();
            $table->dropForeign(['generId']);
            $table->integer('generId')->unsigned()->change();
        });

        Schema::table('documents', function (Blueprint $table) {
            $table->dropForeign(['childId']);
            $table->integer('childId')->unsigned()->change();
        });

        Schema::table('school_levels', function (Blueprint $table) {
            $table->dropForeign(['schoolId']);
            $table->integer('schoolId')->unsigned()->change();
            $table->dropForeign(['levelId']);
            $table->integer('levelId')->unsigned()->change();
        });

        Schema::table('rates', function (Blueprint $table) {
            $table->dropForeign(['schoolId']);
            $table->integer('schoolId')->unsigned()->change();
        });

        Schema::table('abouts', function (Blueprint $table) {
            $table->dropForeign(['schoolId']);
            $table->integer('schoolId')->unsigned()->change();
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign(['schoolId']);
            $table->integer('schoolId')->unsigned()->change();
            $table->dropForeign(['docId']);
            $table->integer('docId')->unsigned()->change();
        });

        Schema::table('staff', function (Blueprint $table) {
            $table->dropForeign(['schoolId']);
            $table->integer('schoolId')->unsigned()->change();
            $table->dropForeign(['super']);
            $table->integer('super')->unsigned()->change();
        });

        Schema::table('s_s_l_s', function (Blueprint $table) {
            $table->dropForeign(['slId']);
            $table->integer('slId')->unsigned()->change();
            $table->dropForeign(['subjectId']);
            $table->integer('subjectId')->unsigned()->change();
        });

        Schema::table('teachers', function (Blueprint $table) {
            $table->dropForeign(['sslId']);
            $table->integer('sslId')->unsigned()->change();
            $table->dropForeign(['staffId']);
            $table->integer('staffId')->unsigned()->change();
        });

        Schema::table('images', function (Blueprint $table) {
            $table->dropForeign(['aboutId']);
            $table->integer('aboutId')->unsigned()->change();
        });
    }
};
