<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;
use App\Hardwareinventory;
use App\Host;

class HardwareinventoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('hardwareinventories')->delete();

		$cpu_gender = ['Core i5 4690K 3.50GHz TDP 88W', 'Core i3 4360 3.70GHz TDP 54W', 'AMD FX-8320 3.50GHz TDP 125W'];
		$memory_gender = [4, 8];
		$vendor_gender = ['DELL', 'HP', 'NEC'];

		$faker = Faker::create('ja_JP');

		$hosts = Host::all();

		foreach ($hosts as $host) {
		//for ($i = 0; $i < 3000; $i++) {
			$inv = new Hardwareinventory([
				'computer_name' => $faker->userName,
				'cpu' => $faker->randomElement($cpu_gender),
				'memory' => $faker->randomElement($memory_gender),
				'vendor_name' => $faker->randomElement($vendor_gender),
			]);
			$host->hardwareinventory()->save($inv);
		}
    }
}
