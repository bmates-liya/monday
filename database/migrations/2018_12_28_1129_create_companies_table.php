<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';	
            $table->collation = 'utf8_unicode_ci';	

            $table->integer('id', true);
            $table->string('companyname');
            $table->string('description')->nullable();
            $table->integer('teamstrength');
            $table->integer('warea');
            $table->integer('currentplan');
            $table->string('logoimage');
            $table->string('headerimage');
            $table->boolean('status');
            $table->timestamps();
            $table->foreign('warea')->references('id')->on('workarea');
            $table->foreign('currentplan')->references('id')->on('plans');
            $table->foreign('teamstrength')->references('id')->on('teamstrength');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
