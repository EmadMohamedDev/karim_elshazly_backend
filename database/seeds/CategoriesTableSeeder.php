<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Test Category 1',
                'created_at' => '2017-12-26 10:37:41',
                'updated_at' => '2017-12-26 10:37:41',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Test Category 2',
                'created_at' => '2017-12-26 10:37:52',
                'updated_at' => '2017-12-26 10:37:52',
            ),
        ));
        
        
    }
}
