<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		 $this->call('MissionTableSeeder');
	}
}


class MissionTableSeeder extends Seeder {

    public function run()
    {
        // nuke it, because
        DB::table('mission')->delete();

        // testing data
        DB::table('mission')->insert(array(
            array(
                'destination_system' => 'Cupis',
                'destination_station' => 'Brahe Hub',
                'commodity' => 'lithium',
                'qty' => 2,
                'hasCargo' => false
            ),
            array(
                'destination_system' => 'Pices',
                'destination_station' => 'Knipling',
                'commodity' => 'gain',
                'qty' => 16,
                'hasCargo' => true
            ),
            array(
                'destination_system' => 'Brani',
                'destination_station' => 'Wundt',
                'commodity' => 'silver',
                'qty' => 8,
                'hasCargo' => false
            )
        ));
    }

}
