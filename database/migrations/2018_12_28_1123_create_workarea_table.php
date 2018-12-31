<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkareaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workarea', function (Blueprint $table) {
            //
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';	
            $table->collation = 'utf8_unicode_ci';	

            $table->integer('id', true);
            $table->string("workarea");
            $table->string('workareaicon');
            $table->boolean('active');
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
        Schema::dropIfExists('workarea');
    }
}
