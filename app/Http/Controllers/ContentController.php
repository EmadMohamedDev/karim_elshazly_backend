<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Type;
use App\Content;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContentRequest;


use Illuminate\Support\Facades\Schema;


class ContentController extends Controller
{
    /**        
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Type::lists('title','id');
        $contents = Content::with('type')->get();
        return view('contents/index',compact('types','contents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Type::all();
        if($types->isEmpty())
        {
         \Session::flash('msg', 'You Should Add Type First');
        }
        $content = null ;
        $types = Type::lists('title','id');
        return view('contents.input',compact('content','types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function fetchtype(ContentRequest $request)
    {
        $type = Type::findOrFail($request['servid']) ;
        return $type;
    }
    
    public function store(Request $request)
    {
        
        $newcontent = $request->all();
        $content = new Content();
        $content->title = $newcontent['title'];
        $content->type_id=$newcontent['type_id'];
        $content->user_id= \Auth::user()->id;
        $content->content_type =$newcontent['content_type'];
        if($newcontent['content_type'] == "1")
        {
            if(($request->hasFile('filepath')) || ($request->hasFile('path')))
            {
                if($request->hasFile('filepath'))
                {
                $filename=uniqid(); //Uniqe Id
                $filepath=$newcontent['filepath'];
                $destinationPath='uploads/contents/';
                $extension = $filepath->getClientOriginalExtension(); //Get File Extension
                $content->path=$destinationPath.$filename.".".$extension;
                $filepath->move($destinationPath,$filename.".".$extension);
                }
                if($request->hasFile('path'))
                {
                    
                    $filename=uniqid(); //Uniqe Id 
                    $imgurl=$newcontent['path'];
                    $destinationPath='uploads/images/';
                    $extension = $imgurl->getClientOriginalExtension(); //Get Video Extension
                    if($newcontent['myField'] == 'Video')
                    {
                        $content->prev_img=$destinationPath.$filename.".".$extension;
                        $imgurl->move($destinationPath,$filename.".".$extension);
                    }
                    else
                    {
                        $content->path=$destinationPath.$filename.".".$extension;
                        $imgurl->move($destinationPath,$filename.".".$extension);
                    }
                    
                }
                else
                {
                    $content->prev_img = "NULL";
                }
                $content->save();
                $request->session()->flash('success','Content Added Successfully');
                return redirect('contents/index'); 
            }
            {
                $request->session()->flash('failed','Missing Fields .. Try Again');
                return redirect('contents/create');                    
            }
            
        }
        else if($newcontent['content_type'] == "2")
        {
            if($newcontent['exturl2'] == "")
            {
              $request->session()->flash('failed','Missing Field URL  .. Try Again ');
              return redirect('contents/create'); 
            }
            else
            {
                $content->path = $newcontent['exturl2'] ;
                if($newcontent['exturl1'] == "")
                {
                    $content->prev_img ="NULL" ;
                }
                else
                {
                    $content->prev_img =$newcontent['exturl1'] ;
                }
                $content->save();
                $request->session()->flash('success','Content Added Successfully');
                return redirect('contents/index');
            }
        }
        else
        {
              $request->session()->flash('failed','Missing Fields .. Try Again ');
              return redirect('contents/create'); 
        }
        
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
        $types = Type::lists('title','id');
        $content = Content::findOrFail($id);
        return view('contents.input',compact('content','types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContentRequest $request, $id)
    {
        $newcontent = $request->all();
        $oldcontent = Content::findOrfail($id);
         if($newcontent['content_typez'] == "1")
         {
            if(($request->hasFile('filepath')) || ($request->hasFile('path')))
            {
                if($request->hasFile('filepath'))
                {
                    $file = $request->file('filepath');
                    $uniqueID = uniqid();
                    $destinationFolder = 'uploads/contents/';
                    $file->move($destinationFolder,$uniqueID.".".$file->getClientOriginalExtension());
                    $newcontent['path'] = $destinationFolder.$uniqueID.".".$file->getClientOriginalExtension();
                    if (file_exists($oldcontent['path']))
                    {
                        unlink($oldcontent['path']);
                    } 
                }
                else
                {
                    $newcontent['path'] = $oldcontent['path'] ;
                }
                
                if($request->hasFile('path'))
                {
                    $file = $request->file('path');
                    $uniqueID = uniqid();
                    $destinationFolder = 'uploads/images/';
                    $file->move($destinationFolder,$uniqueID.".".$file->getClientOriginalExtension());
                    $newcontent['prev_img'] = $destinationFolder.$uniqueID.".".$file->getClientOriginalExtension();
                    if (file_exists($oldcontent['prev_img']))
                    {
                        unlink($oldcontent['prev_img']);
                    } 
                }
                else
                {
                    $newcontent['prev_img'] = $oldcontent['prev_img'] ;
                }
                
            }
             
            $oldcontent->update($newcontent);
            $request->session()->flash('success','Content Updated Successfully');
            return redirect('contents/index'); 
         }
         else if($newcontent['content_typez'] == "2")
         {
            if(($newcontent['exturl2'] == "") && ($newcontent['exturl1'] == ""))
            {
              $request->session()->flash('failed','Missing Field URL  .. Try Again ');
              return redirect('contents/index'); 
            }
            else
            {
                 if($newcontent['exturl1'] != "")
                 {
                     $newcontent['prev_img'] = $newcontent['exturl1'];
                 }
                 if($newcontent['exturl2'] != "")
                 {
                     if(($newcontent['myField'] == 'Audio') || ($newcontent['myField'] == 'Image'))
                     {
                         $newcontent['path'] = $newcontent['exturl2'];
                     }
                     else if($newcontent['myField'] == 'Video')
                     {
                         $newcontent['path'] = $newcontent['exturl2'];
                     }
                     
                 }

                 $oldcontent->update($newcontent);
                 $request->session()->flash('success','Content Updated Successfully');
                 return redirect('contents/index');
            }
         }

         else
         {
             $request->session()->flash('failed','Update Process Fails .. Try Again ');
             return redirect('contents/index'); 
         }

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
            $content = Content::findOrFail($id);
            if (file_exists($content->path))
            {
                unlink($content->path);
            }
            if(file_exists($content->prev_img))
            {
                unlink($content->prev_img);
            }
            $content->delete();
            \Session::flash('success','Content has been Deleted Successfully');
            return redirect('contents/index'); 
        }
    }
    
    
    public function searchcontent(Request $request)
    {
        $contents = null;
        $qurey = null;
        $title = trim($request['title']) ; 
        if((!empty($title)) && (!empty($request['date_picker'])))
        {
            $date = date("Y-m-d",strtotime($request['date_picker']));
            $qurey = "SELECT * FROM contents WHERE title LIKE '%".$title."%'"."AND created_at LIKE '%".$date."%'";
            $contents = DB::select($qurey) ;
            
        }
        else if(!empty($title))
        {
            $qurey = "SELECT * FROM contents WHERE title LIKE '%".$title."%'";
            $contents = DB::select($qurey) ;
        }
        else if(!empty($request['date_picker']))
        {
            $date = date("Y-m-d",strtotime($request['date_picker']));
            $qurey = "SELECT * FROM contents WHERE created_at LIKE '%".$date."%'";
            $contents = DB::select($qurey);
        }

        $types = Type::lists('title','id');
        return view('contents/index2',compact('types','contents'));  
    }
    
}
