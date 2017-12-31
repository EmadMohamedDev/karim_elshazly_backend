<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Content;
use App\Category;
use App\Operator;
use App\Rbt;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\RbtRequest;

class RbtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $rbts =  null ;
        if(isset($request['content_id'])&&!empty($request['content_id']) && is_numeric($request['content_id']))
        {
             $rbts = Rbt::where(['content_id' => $request['content_id']])->with('content','operator')->get();
        }
        else
        {
            $rbts = Rbt::with('category','content','operator')->get(); 
        }
        return view('rbts/index',compact('rbts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       $contents = Content::all();
        if($contents->isEmpty())
        {
         \Session::flash('msg', 'You Should Add Content First');
        }
        $operators = null ;
        $contents = null ;
        $categories = null ;
        if(isset($request['content_id'])&&!empty($request['content_id']) && is_numeric($request['content_id']))
        {
            $rbt = null ;
            $content_id = $request['content_id'] ;
            $contents = Content::where(['id' => $request['content_id']])->lists('title','id');
            $operators = Operator::with('country')->get();
            $categories = Category::lists('title','id');
        }
        else
        {
            $rbt = null ;
            $operators = Operator::with('country')->get();
            $contents = Content::lists('title','id');
            $categories = Category::lists('title','id');
        }
        return view('rbts.input',compact('rbt','operators','categories','contents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RbtRequest $request)
    {
        $rbt = new Rbt();
        if(($request->content_id_s == "") && ($request->content_id == ""))
        {

         \Session::flash('msg', 'Missing Content Field');
         return redirect('rbts/index');

        }
        if($request->content_id_s != "")
        {
            $rbt->content_id = $request->content_id_s;
        }
        else
        {
            $rbt->content_id = $request->content_id;
        }
        $rbt->category_id = $request->category_id;
        $rbt->operator_id = $request->operator_id;
        $rbt->free = $request->rbt_free;
        $rbt->published = $request->rbt_published;
        $rbt->rbt_code = $request->rbt_code;
        \Session::flash('success','Rbt added successfully');
        $rbt->save() ;
        return redirect('rbts/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rbt = Rbt::findOrFail($id) ;
        $contents = Content::lists('title','id');
        $categories = Category::lists('title','id');
        $operators = Operator::lists('title','id');
        return view('rbts.input',compact('operators','categories','contents','rbt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RbtRequest $request, $id)
    {
        $oldrbt = Rbt::findOrfail($id); 
        $newrbt = $request->all();
        $oldrbt->update($newrbt);
        \Session::flash('success','Rbt Updated successfully');
        return redirect('rbts/index');    
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
           $rbt = Rbt::findOrfail($id);
           $rbt->delete();
           \Session::flash('success','Rbt has been Deleted Successfully');
           return redirect('rbts/index'); 
        }
    }
}
