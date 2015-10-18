<?php

use Illuminate\Database\Seeder;

class MaintextsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		Maintexts::create([
		 'name'=> 'Дом',
         'body'=> 'Добро пожаловать на сайт!',
		  'url'=> 'index',
		   'showhide'=>'show' 
		]);
		
		Maintexts::create([
		 'name'=> 'Блог',
         'body'=> 'Добро пожаловать на наш блог',
		  'url'=> 'blog',
		   'showhide'=>'show' 
		]);
		
		Maintexts::create([
		 'name'=> 'Галлерея',
         'body'=> 'Добро пожаловать в нашу галлерию',
		  'url'=> 'gallery',
		   'showhide'=>'show' 
		]);
		
		Maintexts::create([
		 'name'=> 'О Компании',
         'body'=> 'Мы все заказы выполняем чесно и в срок',
		  'url'=> 'about_us',
		   'showhide'=>'show' 
		]);
		
		Maintexts::create([
		 'name'=> 'Контакты',
         'body'=> 'ул. Филимонова, д. 47А; дом.тел: 211-87-55;моб.тел:+375447717775',
		  'url'=> 'contact_us',
		   'showhide'=>'show' 
		]);
		
		
		DB::table('maintexts')->delete();
    }
}
