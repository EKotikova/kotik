<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
		$this->call('MaintextsSeeder::Maintexts');
		$this->command->info('Таблица с текстами заполнена');
		$this->call('TovarsSeeder::Tovars');
		$this->command->info('Таблица с товарами заполнена');

        Model::reguard();
    }
}
