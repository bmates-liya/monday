<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserverificationTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('UserEmailVerification', function (Blueprint $table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id',true);
            $table->string('emailaddress');
            $table->string('password')->nullable();
            $table->string('token');
            $table->integer("validfor")->default('600');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('UserEmailVerification');
    }
}
