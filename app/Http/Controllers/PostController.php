<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Content;
use App\Operator;
use App\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request)
    {
        $posts = null;
        
        if(isset($request['content_id'])&&!empty($request['content_id']) && is_numeric($request['content_id']))
        {
            $posts = Post::with('content','operator')->get();
        }
        else
        {
            $posts = Post::with('content','operator')->get();
        }
        
        return view('posts/index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(PostRequest $request)
    {
         $contents = Content::all();
        if($contents->isEmpty())
        {
         \Session::flash('msg', 'You Should Add Content First');
        }
        $operators = null ;
        $contents = null ;
        
        if(isset($request['content_id'])&&!empty($request['content_id']) && is_numeric($request['content_id']))
        {
            $post = null ;
            $contents = Content::where(['id' => $request['content_id']])->lists('title','id');
            $operators = Operator::with('country')->get();
        }
        else
        {
            $post = null;
            $operators = Operator::with('country')->get();
            $contents = Content::lists('title','id');  
        }
        
        return view('posts.input',compact('operators','contents','post'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $post = new Post();
        if(($request->content_id_s == "") && ($request->content_id == ""))
        {

         \Session::flash('msg', 'Missing Content Field');
         return redirect('posts/index');

        }
        if($request->content_id_s != "")
        {
            $post->content_id = $request->content_id_s;
        }
        else
        {
            $post->content_id = $request->content_id;
        }
        $post->operator_id = $request->operator_id;
        $post->Published = $request->Published;
        $post->Free = $request->Free;
        $post->user_id = \Auth::user()->id;
        $newdata = date('Y-m-d',strtotime($request->Published_Date));
        $post->Published_Date = $newdata;
        $post->post_image = "NULL";
        \Session::flash('success','Post added successfully');
        $post->save() ;  
        return redirect('posts/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrfail($id);
        $operators = Operator::with('country')->get();
        $contents = Content::lists('title','id');
        return view('posts.input',compact('operators','contents','post'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, $id)
    {
        $newpost = $request->all();
        $oldpost= Post::findOrFail($id);
        $newdata = date('Y-m-d',strtotime($request->Published_Date));
        $newpost['Published_Date'] = $newdata;
        $oldpost->update($newpost);
        \Session::flash('success','Post Updated successfully');
        return redirect('posts/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Auth::user()->hasRole('super_admin')) 
        {
           $post = Post::findOrfail($id);
            
           if (file_exists($post->post_image)) //Deleting Operator Image
            {    
                     unlink($post->post_image);
            } 

            $post->delete();
            \Session::flash('success','Post has been Deleted Successfully');
            return redirect('posts/index'); 
        }
    }
}
