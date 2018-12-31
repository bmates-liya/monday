<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';	
            $table->collation = 'utf8_unicode_ci';	
            //$table->temporary();	
            $table->integer('id', true);
            $table->string('name',100);
            $table->string('email',100)->unique();
            $table->integer('companyid');
            $table->string('phoneno',100);
            $table->string('mobno',100);
            $table->string('skype',100)->nullable();
            $table->string('jobtitle',100)->nullable();
            $table->integer('timezone');
            $table->timestamp('lastlogin');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password',100);
            $table->boolean('status');
            $table->rememberToken();
            $table->timestamps();
            $table->index(['email', 'companyid']);
            $table->foreign('companyid')->references('id')->on('companies');
            $table->foreign('timezone')->references('id')->on('timezone');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
