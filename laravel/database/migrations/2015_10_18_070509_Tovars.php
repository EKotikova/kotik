<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tovars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::create('tovarses', function($table){
			$table->increments('id');
            $table->string('name',40);
            $table->text('body');
            $table->text('picher');   
            $table->text('pichersmall');  	
			$table->enum('showhide',array('show','hide'));
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
        //
		Schema::drop('tovarses');
    }
}
