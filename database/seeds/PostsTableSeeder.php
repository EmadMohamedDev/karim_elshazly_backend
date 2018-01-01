<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('posts')->delete();
        
        \DB::table('posts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'content_id' => 6,
                'operator_id' => 1,
                'Published_Date' => '2017-12-19',
                'Published' => 1,
                'Free' => 0,
                'user_id' => 1,
                'post_image' => 'uploads/posts/5a43698f17298.jpg',
                'created_at' => '2017-12-27 09:36:15',
                'updated_at' => '2017-12-27 09:36:15',
            ),
            1 => 
            array (
                'id' => 2,
                'content_id' => 3,
                'operator_id' => 1,
                'Published_Date' => '2017-12-19',
                'Published' => 1,
                'Free' => 1,
                'user_id' => 1,
                'post_image' => 'uploads/posts/5a43699e93fac.jpg',
                'created_at' => '2017-12-27 09:36:30',
                'updated_at' => '2017-12-27 09:36:30',
            ),
            2 => 
            array (
                'id' => 6,
                'content_id' => 5,
                'operator_id' => 1,
                'Published_Date' => '2017-11-27',
                'Published' => 1,
                'Free' => 1,
                'user_id' => 1,
                'post_image' => 'uploads/posts/5a4375e90f34d.jpg',
                'created_at' => '2017-12-27 10:28:57',
                'updated_at' => '2017-12-27 10:28:57',
            ),
            3 => 
            array (
                'id' => 7,
                'content_id' => 10,
                'operator_id' => 1,
                'Published_Date' => '2017-12-31',
                'Published' => 1,
                'Free' => 1,
                'user_id' => 1,
                'post_image' => 'uploads/posts/5a43698f17298.jpg',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            4 => 
            array (
                'id' => 8,
                'content_id' => 15,
                'operator_id' => 1,
                'Published_Date' => '2017-12-31',
                'Published' => 1,
                'Free' => 1,
                'user_id' => 1,
                'post_image' => 'uploads/posts/5a49eff79698f.png',
                'created_at' => '2018-01-01 08:23:19',
                'updated_at' => '2018-01-01 08:23:19',
            ),
        ));
        
        
    }
}
