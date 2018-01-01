<?php

use Illuminate\Database\Seeder;

class ContentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contents')->delete();
        
        \DB::table('contents')->insert(array (
            0 => 
            array (
                'id' => 3,
                'title' => 'TT1',
                'path' => 'uploads/services/videos/5a421695a6010.mp4',
                'type_id' => 1,
                'user_id' => 1,
                'created_at' => '2017-12-25 13:39:50',
                'updated_at' => '2017-12-26 09:30:18',
                'prev_img' => 'uploads/services/images/5a4216aa9633f.jpg',
                'content_type' => 1,
            ),
            1 => 
            array (
                'id' => 5,
                'title' => 'TT3see',
                'path' => 'https://www.youtube.com/embed/LQxt8HD7ziA',
                'type_id' => 1,
                'user_id' => 1,
                'created_at' => '2017-12-26 07:32:18',
                'updated_at' => '2017-12-26 09:27:29',
                'prev_img' => 'http://qnimate.com/wp-content/uploads/2014/03/images2.jpg',
                'content_type' => 2,
            ),
            2 => 
            array (
                'id' => 6,
                'title' => 'TT4',
                'path' => 'uploads/services/videos/5a421695a6010.mp4',
                'type_id' => 1,
                'user_id' => 1,
                'created_at' => '2017-12-26 07:33:47',
                'updated_at' => '2017-12-26 09:34:05',
                'prev_img' => 'uploads/services/images/5a4216aa9633f.jpg',
                'content_type' => 1,
            ),
            3 => 
            array (
                'id' => 10,
                'title' => 'TT9',
                'path' => 'uploads/services/images/5a421c0e9b25a.JPG',
                'type_id' => 3,
                'user_id' => 1,
                'created_at' => '2017-12-26 07:40:28',
                'updated_at' => '2017-12-26 09:53:18',
                'prev_img' => 'NULL',
                'content_type' => 1,
            ),
            4 => 
            array (
                'id' => 11,
                'title' => 'Greetings',
                'path' => 'https://www.w3schools.com/w3css/img_forest.jpg',
                'type_id' => 3,
                'user_id' => 1,
                'created_at' => '2017-12-26 07:40:47',
                'updated_at' => '2017-12-26 09:55:59',
                'prev_img' => 'NULL',
                'content_type' => 2,
            ),
            5 => 
            array (
                'id' => 13,
                'title' => 'Egypt',
                'path' => 'http://www.samisite.com/sound/cropShadesofGrayMonkees.mp3',
                'type_id' => 2,
                'user_id' => 1,
                'created_at' => '2017-12-26 09:36:23',
                'updated_at' => '2017-12-26 09:40:58',
                'prev_img' => 'NULL',
                'content_type' => 2,
            ),
            6 => 
            array (
                'id' => 14,
                'title' => 'ElGYYPT',
                'path' => 'http://www.samisite.com/sound/cropShadesofGrayMonkees.mp3',
                'type_id' => 2,
                'user_id' => 1,
                'created_at' => '2017-12-26 09:45:44',
                'updated_at' => '2017-12-26 09:48:37',
                'prev_img' => 'NULL',
                'content_type' => 2,
            ),
            7 => 
            array (
                'id' => 15,
                'title' => 'test audio',
                'path' => 'uploads/services/audios/5a49efa59e0d7.wav',
                'type_id' => 2,
                'user_id' => 1,
                'created_at' => '2018-01-01 08:21:57',
                'updated_at' => '2018-01-01 08:21:57',
                'prev_img' => 'NULL',
                'content_type' => 1,
            ),
        ));
        
        
    }
}
