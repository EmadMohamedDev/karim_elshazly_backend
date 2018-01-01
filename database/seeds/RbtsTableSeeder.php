<?php

use Illuminate\Database\Seeder;

class RbtsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('rbts')->delete();
        
        \DB::table('rbts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'content_id' => 11,
                'category_id' => 2,
                'published' => 1,
                'free' => 1,
                'operator_id' => 1,
                'rbt_code' => 5569,
                'created_at' => '2017-12-26 12:13:42',
                'updated_at' => '2017-12-26 12:26:11',
            ),
            1 => 
            array (
                'id' => 2,
                'content_id' => 3,
                'category_id' => 1,
                'published' => 1,
                'free' => 0,
                'operator_id' => 1,
                'rbt_code' => 8898,
                'created_at' => '2017-12-26 12:26:29',
                'updated_at' => '2017-12-26 12:26:29',
            ),
            2 => 
            array (
                'id' => 3,
                'content_id' => 15,
                'category_id' => 1,
                'published' => 1,
                'free' => 1,
                'operator_id' => 1,
                'rbt_code' => 123,
                'created_at' => '2018-01-01 08:22:20',
                'updated_at' => '2018-01-01 08:22:20',
            ),
            3 => 
            array (
                'id' => 5,
                'content_id' => 15,
                'category_id' => 2,
                'published' => 1,
                'free' => 1,
                'operator_id' => 1,
                'rbt_code' => 123,
                'created_at' => '2018-01-01 08:27:05',
                'updated_at' => '2018-01-01 08:27:05',
            ),
        ));
        
        
    }
}
