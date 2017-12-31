<?php

use Illuminate\Database\Seeder;

class OperatorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('operators')->delete();
        
        \DB::table('operators')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Orange',
                'operator_code' => 5561,
                'operator_image' => 'uploads/operators/5a4253a5651fd.jpg',
                'country_id' => 4,
                'created_at' => '2017-12-25 10:17:53',
                'updated_at' => '2017-12-26 13:50:29',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Vodafone',
                'operator_code' => 960,
                'operator_image' => 'uploads/operators/5a43706c24244.jpg',
                'country_id' => 4,
                'created_at' => '2017-12-27 10:05:32',
                'updated_at' => '2017-12-27 10:05:32',
            ),
        ));
        
        
    }
}
