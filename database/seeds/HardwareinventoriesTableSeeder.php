<?php

use Illuminate\Database\Seeder;
use App\Hardwareinventory;

class HardwareinventoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('deals')->delete();

		$cpu_gender = ['Core i5 4690K 3.50GHz TDP 88W', 'Core i3 4360 3.70GHz TDP 54W', 'AMD FX-8320 3.50GHz TDP 125W'];
		$memory_gender = [4, 8];
		$vendor_gender = ['DELL', 'HP', 'NEC'];

		$faker = Faker::create('ja_JP');
		for ($i = 0; $i < 3000; $i++) {
			$menu = App\Menu::orderByRaw("RAND()")->get()->first();
			$customer = Customer::orderByRaw("RAND()")->get()->first();
			$user = User::orderByRaw("RAND()")->get()->first();
			$deal = new Deal([
				'computer_name' => $faker->userName,
				'CPU' => $faker->randomElement($cpu_gender),
				'memory' => $faker->randomElement($memory_gender),
				'vendor_name' => $faker->randomElement($vendor_gender),
			]);
			$customer->deals()->save($deal);
			$menu->deals()->save($deal);
			$user->deals()->save($deal);
		}
    }
}
