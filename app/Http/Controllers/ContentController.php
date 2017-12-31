<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Type;
use App\Content;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContentRequest;

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
        if(($newcontent['myField'] == 'Video') && ($newcontent['content_type'] != ""))
        {
            if($newcontent['content_type'] == "1") //Internal Video
            {
                   if(($request->hasFile('vidpath')) && ($request->hasFile('path')))
                    {
                        $content = new Content();
                        $filename=uniqid(); //Uniqe Id 
                        $vidurl=$newcontent['vidpath'];
                        $destinationPath='uploads/services/videos/';
                        $extension = $vidurl->getClientOriginalExtension(); //Get Video Extension
                        $content->path=$destinationPath.$filename.".".$extension;
                        $vidurl->move($destinationPath,$filename.".".$extension);
                        
                        $filename=uniqid(); //Uniqe Id 
                        $imgurl=$newcontent['path'];
                        $destinationPath='uploads/services/images/';
                        $extension = $imgurl->getClientOriginalExtension(); //Get Video Extension
                        $content->prev_img=$destinationPath.$filename.".".$extension;
                        $imgurl->move($destinationPath,$filename.".".$extension);
                       
                        $content->content_type=$newcontent['content_type'];
                        $content->type_id=$newcontent['type_id'] ;
                        $content->title = $newcontent['title'];
                        $content->user_id= \Auth::user()->id;
                        $content->save();
                        $request->session()->flash('success','Content Added Successfully');
                        return redirect('contents/index'); 
                    }
                    {
                        $request->session()->flash('failed','Missing Video Or Thumb Field');
                        return redirect('contents/index'); 
                    }
            }
            else if($newcontent['content_type'] == "2") //External Video
            {
                    if($newcontent['vidpathext'] == "" || $newcontent['imgpath'] == "")
                    {
                        $request->session()->flash('failed','Missing Video Or Thumb URL');
                        return redirect('contents/index'); 
                    }
                    else
                    {
                        $content = new Content();
                        $content->content_type =$newcontent['content_type'];
                        $content->type_id =$newcontent['type_id'] ;
                        $content->user_id = \Auth::user()->id;
                        $content->path=str_replace("watch?v=","embed/",$newcontent['vidpathext']) ;
                        $content->prev_img =$newcontent['imgpath'] ;
                        $content->title = $newcontent['title'];
                        $content->save();
                        $request->session()->flash('success','Content Added Successfully');
                        return redirect('contents/index');
                    }
                   
            }
           
            
        }
        
        else if (($newcontent['myField'] == 'Audio') && ($newcontent['content_type2'] != ""))
        {
            if($newcontent['content_type2'] == "1") //Internal Audio
            { 
                 if($request->hasFile('audpath'))
                 {
                            $content = new Content();
                            $filename=uniqid(); //Uniqe Id 
                            $audurl=$newcontent['audpath'];
                            $destinationPath='uploads/services/audios/';
                            $extension = $audurl->getClientOriginalExtension(); //Get Video Extension
                            $content->path=$destinationPath.$filename.".".$extension;
                            $audurl->move($destinationPath,$filename.".".$extension);
                            $content->content_type=$newcontent['content_type2'];
                            $content->type_id=$newcontent['type_id'] ;
                            $content->title = $newcontent['title'];
                            $content->prev_img = "NULL";
                            $content->user_id= \Auth::user()->id;
                            $content->save();
                            $request->session()->flash('success','Content Added Successfully');
                            return redirect('contents/index'); 
                 }
                 else
                 {
                            $request->session()->flash('failed','Missing Audio Field');
                            return redirect('contents/index'); 
                 }
            }
            else if($newcontent['content_type2'] == "2") //External Audio
            {
                    if($newcontent['audpath'] == "")
                    {
                        $request->session()->flash('failed','Missing Audio URL');
                        return redirect('contents/index'); 
                    }
                    else
                    {
                        $content = new Content();
                        $content->content_type =$newcontent['content_type2'];
                        $content->type_id =$newcontent['type_id'] ;
                        $content->user_id = \Auth::user()->id;
                        $content->path = $newcontent['audpath'] ;
                        $content->title = $newcontent['title'];
                         $content->prev_img = "NULL";
                        $content->save();
                        $request->session()->flash('success','Content Added Successfully');
                        return redirect('contents/index');
                    }
                
            }
            
        }
        else if(($newcontent['myField'] == 'Image') && ($newcontent['content_type3'] != ""))
        {
            if($newcontent['content_type3'] == "1") //Internal Image
            {
                if($request->hasFile('path'))
                {
                        $content = new Content();
                        $filename=uniqid(); //Uniqe Id 
                        $imgurl=$newcontent['path'];
                        $destinationPath='uploads/services/images/';
                        $extension = $imgurl->getClientOriginalExtension(); //Get Video Extension
                        $content->path=$destinationPath.$filename.".".$extension;
                        $imgurl->move($destinationPath,$filename.".".$extension);
                        $content->content_type=$newcontent['content_type3'];
                        $content->title = $newcontent['title'];
                        $content->type_id=$newcontent['type_id'] ;
                        $content->prev_img = "NULL";
                        $content->user_id= \Auth::user()->id;
                        $content->save();
                        $request->session()->flash('success','Content Added Successfully');
                        return redirect('contents/index'); 
                }
                else
                {
                        $request->session()->flash('failed','Missing Image Field');
                        return redirect('contents/index'); 
                }
            }
            else if($newcontent['content_type3'] == "2") //External Image
            {
                if($newcontent['imgpath'] == "")
                {
                        $request->session()->flash('failed','Missing Image URL');
                        return redirect('contents/index'); 
                }
                else
                {
                        $content = new Content();
                        $content->content_type =$newcontent['content_type3'];
                        $content->type_id =$newcontent['type_id'] ;
                        $content->user_id = \Auth::user()->id;
                        $content->title = $newcontent['title'];
                        $content->path = $newcontent['imgpath'] ;
                        $content->prev_img = "NULL";
                        $content->save();
                        $request->session()->flash('success','Content Added Successfully');
                        return redirect('contents/index');
                }
            }
        }
        else
        {
            $request->session()->flash('success','No Method Selected');
            return redirect('contents/index');
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
        if(($newcontent['myField'] == 'Video') && ($newcontent['content_typez'] != ""))
        {
            if($newcontent['content_typez'] == "1") //Internal Video
            {
                if($request->hasFile('vidpath'))
                {
                    $file = $request->file('vidpath');
                    $uniqueID = uniqid();
                    $destinationFolder = 'uploads/services/videos/';
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
                    $destinationFolder = 'uploads/services/images/';
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
                
                $oldcontent->update($newcontent);
                $request->session()->flash('success','Content Updated Successfully');
                return redirect('contents/index');
            }
            else if($newcontent['content_typez'] == "2") //External Video
            {
                    if($newcontent['vidpathext'] == "" || $newcontent['imgpath'] == "")
                    {
                        
                        $request->session()->flash('failed','Missing Video Or Thumb URL');
                        return redirect('contents/index'); 
                    }
                    else
                    {
                        $newcontent['path'] = str_replace("watch?v=","embed/",$newcontent['vidpathext']);
                        $newcontent['prev_img'] = $newcontent['imgpath'];
                        $oldcontent->update($newcontent);
                        $request->session()->flash('success','Content Updated Successfully');
                        return redirect('contents/index');
                    }
            }
            
        }
        else if(($newcontent['myField'] == 'Audio') && ($newcontent['content_typez'] != ""))
        {
            if($newcontent['content_typez'] == "1") //Internal Video
            {
                if($request->hasFile('audpath'))
                {
                    $file = $request->file('audpath');
                    $uniqueID = uniqid();
                    $destinationFolder = 'uploads/services/audios/';
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
                $newcontent['content_type'] = $newcontent['content_typez'];
                //$newcontent['prev_img'] == "NULL";
                $oldcontent->update($newcontent);
                $request->session()->flash('success','Content Updated Successfully');
                return redirect('contents/index');
            }
            else if($newcontent['content_typez'] == "2") //External Video
            {
                    if($newcontent['audpath'] == "")
                    {
                        
                        $request->session()->flash('failed','Missing Audio URL');
                        return redirect('contents/index'); 
                    }
                    else
                    {
                        $newcontent['content_type'] = $newcontent['content_typez'];
                        $newcontent['path'] = $newcontent['audpath'];
                        //$newcontent['prev_img'] == "NULL";
                        $oldcontent->update($newcontent);
                        $request->session()->flash('success','Content Updated Successfully');
                        return redirect('contents/index');
                    }
            }
        }
        else if(($newcontent['myField'] == 'Image') && ($newcontent['content_typez'] != ""))
        {
            if($newcontent['content_typez'] == "1") //Internal Video
            {
                 if($request->hasFile('path'))
                {
                    $file = $request->file('path');
                    $uniqueID = uniqid();
                    $destinationFolder = 'uploads/services/images/';
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
                $newcontent['content_type'] = $newcontent['content_typez'];
                $oldcontent->update($newcontent);
                $request->session()->flash('success','Content Updated Successfully');
                return redirect('contents/index');
            }
            else if($newcontent['content_typez'] == "2") //External Video
            {
                if($newcontent['imgpath'] == "")
                    {
                        
                        $request->session()->flash('failed','Missing Audio URL');
                        return redirect('contents/index'); 
                    }
                    else
                    {
                        $newcontent['content_type'] = $newcontent['content_typez'];
                        $newcontent['path'] = $newcontent['imgpath'];
                        $oldcontent->update($newcontent);
                        $request->session()->flash('success','Content Updated Successfully');
                        return redirect('contents/index');
                    }
            }
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
}
