<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('types')->delete();
        
        \DB::table('types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Video',
                'created_at' => '2017-12-25 08:59:05',
                'updated_at' => '2017-12-25 08:59:23',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Audio',
                'created_at' => '2017-12-25 08:59:33',
                'updated_at' => '2017-12-25 08:59:33',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Image',
                'created_at' => '2017-12-25 08:59:41',
                'updated_at' => '2017-12-25 08:59:41',
            ),
        ));
        
        
    }
}
