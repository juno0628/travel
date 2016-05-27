<?php

use Illuminate\Database\Seeder;

class TravelplansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
    		DB::table('travelplans')->delete();

    		$travelplans = array(
    				['id' => 1, 'is_international'=> false, 'slug'=>'travelplan-1', 'destination_city' => 'New York', 'destination_country' => 'United States', 'departure_city' => 'San Francisco', 'departure_country' => 'United States', 'created_at' => new DateTime, 'updated_at' => new DateTime],
                    ['id' => 2, 'is_international'=> true, 'slug'=>'travelplan-2','destination_city' => 'London', 'destination_country' => 'England', 'departure_city' => 'New York', 'departure_country' => 'United States', 'created_at' => new DateTime, 'updated_at' => new DateTime]
    			);
    		DB::table('travelplans')->insert($travelplans);
    }
}
