<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;
use App\Host;

class HostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('hosts')->delete();
		$faker = Faker::create('ja_JP');
		for ($i = 0; $i < 500; $i++) {
			Host::create([
				'host_name' => $faker->userName,
				'domain_name' => $faker->domainName,
				'ip_address' => $faker->ipv4,
			]);
		}
    }
}
