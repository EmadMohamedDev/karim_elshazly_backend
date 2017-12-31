<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('countries')->delete();
        
        \DB::table('countries')->insert(array (
            0 => 
            array (
                'id' => 4,
                'title' => 'Egypt',
                'created_at' => '2017-12-25 10:14:49',
                'updated_at' => '2017-12-25 10:14:49',
            ),
            1 => 
            array (
                'id' => 5,
                'title' => 'Kuwait',
                'created_at' => '2017-12-25 10:15:03',
                'updated_at' => '2017-12-27 09:55:27',
            ),
            2 => 
            array (
                'id' => 7,
                'title' => 'KSA',
                'created_at' => '2017-12-27 09:59:59',
                'updated_at' => '2017-12-27 10:00:09',
            ),
        ));
        
        
    }
}
