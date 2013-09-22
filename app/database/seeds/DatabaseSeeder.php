<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('DayTableSeeder');
                $this->call('FactTableSeeder');
                $this->call('TypeTableSeeder');
                $this->call('FactTypeTableSeeder');
	}

}