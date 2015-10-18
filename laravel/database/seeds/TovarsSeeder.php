<?php

use Illuminate\Database\Seeder;

class TovarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		/*Tovars::create([
		'name' =>'товар1',
		'body' => 'текст',
		'picher' =>asset('C:/Users/Public/Pictures/Sample Pictures/Пустыня.jpg'),
		'pichersmall'=>'_',
		 'praic' => '100$',
		 'showhide' => 'show']);*/
		 
		
		
		
		DB::table('tovarses')->delete();
    }
}
