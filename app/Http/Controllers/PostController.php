<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Content;
use App\Operator;
use App\Post;
use App\Country;
use App\Type;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;

use Illuminate\Support\Facades\Schema;

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
            $posts = Post::where(['content_id' => $request['content_id']])->with('content','operator')->get();
        }
        else
        {
            $posts = Post::with('content','operator')->get();
        }
        
        $types = Type::lists('title','id');
        $countries = Country::lists('title','id');
        $operators = Operator::with('country')->get();
        return view('posts/index',compact('posts','types','countries','operators'));
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
        $post = null ;
        
        if(isset($request['content_id'])&&!empty($request['content_id']) && is_numeric($request['content_id']))
        {
            $contents = Content::where(['id' => $request['content_id']])->lists('title','id');
            $operators = Operator::with('country')->get();
        }
        else
        {
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
        $postdetails = array();
        $moved = true;
        $holdval = "";
        foreach($request['operator_id'] as $item)
        {
            $post = new Post();
            if(($request->content_id_s == "") && ($request->content_id == ""))
            {

            \Session::flash('msg', 'Missing Content Field');
            return redirect('posts/create');

            }
            if($request->content_id_s != "")
            {
            $post->content_id = $request->content_id_s;
            }
            else
            {
            $post->content_id = $request->content_id;
            }
            $post->Published = $request->Published;
            $post->Free = $request->Free;
            $post->user_id = \Auth::user()->id;
            $newdata = date('Y-m-d',strtotime($request->Published_Date));
            $post->Published_Date = $newdata;
            if($moved)
            {
                if($request->hasFile('post_image'))
                {
                        $filename=uniqid(); //Uniqe Id 
                        $imgurl=$request->file('post_image');
                        $destinationPath='uploads/posts/';
                        $extension = $imgurl->getClientOriginalExtension();    
                        $post->post_image=$destinationPath.$filename.".".$extension;
                        $imgurl->move($destinationPath,$filename.".".$extension);
                        $moved = false;
                        $holdval = $post->post_image;
                }  
            }
            else
            {
                $post->post_image = $holdval;
            }

              $post->operator_id = $item;
              array_push($postdetails,$post);
            }
        
        //return [$postdetails];
        for($i = 0; $i < count($postdetails); $i++){
        //add you insert query
            $post = new Post();
            $post = $postdetails[$i];
            $post->save();
        }

        \Session::flash('success','Post added successfully');
        
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
        $destinationFolder = "uploads/posts/"; 
        $newdata = date('Y-m-d',strtotime($request->Published_Date));
        $newpost['Published_Date'] = $newdata;
        if ($request->hasFile('post_image'))
        {
                $file = $request->file('post_image');
                $uniqueID = uniqid();
                $file->move($destinationFolder,$uniqueID.".".$file->getClientOriginalExtension());
                $newpost['post_image'] = $destinationFolder.$uniqueID.".".$file->getClientOriginalExtension();
                if (file_exists($oldpost['post_image']))
                {
                    //unlink($oldpost['post_image']);
                }
        }
        else
        {
            $newpost['post_image'] = $oldpost['post_image'] ;
        }
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
    
    public function searchpost(Request $request)
    {
        $post_contents = array();
        $post_columns = Schema::getColumnListing('posts');
        $columns =  array(0=>"operator_id",1=>"Published", 2=>"Free");
        $search_key_value = array();

        foreach ($request['search_field'] as $index=>$item) 
        {
            if (strlen($item)==0) //Skip This Item
                continue ;
            else
            {
                if (array_search($columns[$index],$post_columns))
                {
                    $search_key_value[$columns[$index]] = $item ;
                }
            }
        }
        
        $string_query = "" ;
        $counter = 0 ;
        $size = count($search_key_value) ;
        foreach ($search_key_value as $index=>$value)
        {
           $counter++ ;
            if ($counter == $size)
                $string_query .= "`$index`"." = '$value'" ;
            else
                $string_query .= "`$index`"." = '$value' AND ";
        }
        
        $select = "SELECT * FROM posts " ;
        if (empty($string_query))
            $where = "";
        else
            $where = " WHERE ".$string_query ;
        
        if(!empty($request['title']))
        {
            if($where != "")
            {
               $x = " AND contents.title LIKE '%".$request['title']."%'" ;
               $where .= $x;
            }
            else
            {
                $x = " WHERE contents.title LIKE '%".$request['title']."%'" ;
                $where .= $x;
            }
           
        }
        $join = "" ;
        
        if(!empty($request['title']))
        {
            $join .= " JOIN contents ON contents.id = posts.content_id ";
        }
        
        $query = $select.$join.$where;
        
        $posts = DB::select($query) ;
        $types = Type::lists('title','id');
        $countries = Country::lists('title','id');
        $operators = Operator::with('country')->get();
        //return [$posts,$types,$countries,$operators];
        return view('posts/index2',compact('posts','types','countries','operators'));
    }
}
