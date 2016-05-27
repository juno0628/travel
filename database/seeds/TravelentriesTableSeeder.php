<?php

use Illuminate\Database\Seeder;

class TravelentriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
    		DB::table('travelentries')->delete();

    		$travelentries = array(
    				['id' => 1, 'travelplan_id'=> 1, 'slug'=>'travelentry-1','category' => 'lodging', 'notes' => 'Hilton', 'estimated_amount' => 300.50, 'actual_expense' => 250.00],
            ['id' => 2, 'travelplan_id'=> 1, 'slug'=>'travelentry-2','category' => 'food', 'notes' => 'brunch', 'estimated_amount' => 35.00, 'actual_expense' => 25.00],
            ['id' => 3, 'travelplan_id'=> 2, 'slug'=>'travelentry-3','category' => 'transporation', 'notes' => 'uber', 'estimated_amount' => 48.00, 'actual_expense' => 24.00]
    			);
    		DB::table('travelentries')->insert($travelentries);
    }
}
