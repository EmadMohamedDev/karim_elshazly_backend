<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Setting ; 

class FrontEndController extends Controller
{
    public function homepage(Request $request)
    {
        // STEPS 
        // 1. get homepage image from settings 
        // 2. get facebook,twitter,instagram, and youtube links from settings
        // 3. if not found return default values 

        $homepage_image = Setting::where('key','LIKE','%image%')->first();
        $facebook_link = Setting::where('key','LIKE','%facebook%')->first() ; 
        $twitter_link = Setting::where('key','LIKE','%twitter%')->first() ; 
        $instagram_link = Setting::where('key','LIKE','%instagram%')->first() ;
        $youtube_link = Setting::where('key','LIKE','%youtube%')->first() ; 

        if(! $homepage_image)
            $homepage_image = url('img/home.jpg');
        else
            $homepage_image = $homepage_image->value ; 

        if(! $facebook_link)
            $facebook_link = "https://www.facebook.com/karem.alshazley/" ; 
        else
            $facebook_link = $facebook_link->value ; 

        if(! $twitter_link)
            $twitter_link = "https://twitter.com/karim_alshazley?lang=ar" ; 
        else
            $twitter_link = $twitter_link->value ; 
            
        if(! $instagram_link)
            $instagram_link = "https://www.instagram.com/karim_alshazley/" ; 
        else
            $instagram_link = $instagram_link->value ; 

        if(! $youtube_link)
            $youtube_link = "https://www.youtube.com/channel/UC9Gx0kQ94C2tyzuLzzYy9VQ" ; 
        else
            $youtube_link = $youtube_link->value ; 

        return view('front_end.index',compact('youtube_link','homepage_image','facebook_link','twitter_link','instagram_link'))  ;
    }
    
    public function audios(Request $request)
    {
        // 1. get audios from posts table 
        // 2. if no operator listing will be from audio

        $op_id = $request['op_id'] ; 
        if(isset($op_id)&&is_numeric($op_id))
        {
            // list from posts
            $rbts = 
            
        }
        else{
            // list from rbts 
        }

        return "audio";
    }
    
    public function videos(Request $request)
    {
        
    }
    
    public function images(Request $request)
    {
        
    }
    
}
