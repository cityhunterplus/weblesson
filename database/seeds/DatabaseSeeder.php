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

		DB::table('hardwareinventories')->delete();

		$this->call(HostsTableSeeder::class);
		$this->call(HardwareinventoriesTableSeeder::class);

        Model::reguard();
    }
}
