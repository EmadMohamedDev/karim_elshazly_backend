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
                'Published' => 0,
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
                'Published' => 0,
                'Free' => 1,
                'user_id' => 1,
                'post_image' => 'uploads/posts/5a4375e90f34d.jpg',
                'created_at' => '2017-12-27 10:28:57',
                'updated_at' => '2017-12-27 10:28:57',
            ),
        ));
        
        
    }
}
