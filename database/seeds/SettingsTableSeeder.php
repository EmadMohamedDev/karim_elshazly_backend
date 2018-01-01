<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'homepage image',
                'value' => 'settings_images/5a489f33dd761.jpg',
                'created_at' => '2017-12-31 08:26:27',
                'updated_at' => '2017-12-31 08:26:27',
                'type' => 3,
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'sounds_title',
                'value' => 'الصوتيات',
                'created_at' => '2017-12-31 08:27:01',
                'updated_at' => '2017-12-31 08:27:01',
                'type' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'videos_title',
                'value' => 'الفيديوهات',
                'created_at' => '2017-12-31 08:27:22',
                'updated_at' => '2017-12-31 08:27:22',
                'type' => 2,
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'images_title',
                'value' => 'الصور',
                'created_at' => '2017-12-31 08:27:52',
                'updated_at' => '2017-12-31 08:27:52',
                'type' => 2,
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'homepage_title',
                'value' => 'الرئيسية',
                'created_at' => '2017-12-31 08:28:20',
                'updated_at' => '2017-12-31 08:28:20',
                'type' => 2,
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'pagination_number',
                'value' => '6',
                'created_at' => '2018-01-01 09:01:02',
                'updated_at' => '2018-01-01 14:07:48',
                'type' => 2,
            ),
            6 => 
            array (
                'id' => 9,
                'key' => 'slogan',
                'value' => ' كاتب مصري معاصر له العديد من الكتب ',
                'created_at' => '2018-01-01 09:21:25',
                'updated_at' => '2018-01-01 09:24:55',
                'type' => 2,
            ),
        ));
        
        
    }
}
