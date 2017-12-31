<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\Operator;
use App\Country;
use App\Http\Requests\OperatorRequest;
use App\Http\Controllers\Controller;


class OperatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $operators = Operator::all();
        $countries = Country::lists('title','id');
        return view('operators/index', compact('operators','countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        
        if($countries->isEmpty())
        {
         \Session::flash('msg', 'You Should Add Country First');
        }

        $operator = null;
        $countries = Country::lists('title','id');
        
        return view('operators.input',compact('operator','countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OperatorRequest $request)
    {
        $operator = new Operator();
        $operator->title=$request->title;
        $operator->country_id=$request->country_id;
        $operator->operator_code=$request->operator_code;
        
        
        $filename=uniqid(); //Uniqe Id 
        $imgurl=$request->file('operator_image');
        $destinationPath='uploads/operators/';
        $extension = $imgurl->getClientOriginalExtension();    
        $operator->operator_image=$destinationPath.$filename.".".$extension;
        $imgurl->move($destinationPath,$filename.".".$extension);

        \Session::flash('success','Operator added successfully');
        $operator->save() ;
        
        return redirect('operators/index');
        
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
        $operator = Operator::findOrFail($id) ;
        $countries = Country::lists('title','id');
        return view('operators.input',compact('operator','countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OperatorRequest $request, $id)
    {
    
        $newoperator = $request->all();
        $oldoperator= Operator::findOrFail($id);
        $destinationFolder = "uploads/operators/";
        
        if ($request->hasFile('operator_image'))
        {
                $file = $request->file('operator_image');
                $uniqueID = uniqid();
                $file->move($destinationFolder,$uniqueID.".".$file->getClientOriginalExtension());
                $newoperator['operator_image'] = $destinationFolder.$uniqueID.".".$file->getClientOriginalExtension();
                if (file_exists($oldoperator['operator_image']))
                {
                    unlink($oldoperator['operator_image']);
                }
        }
        else
        {
            $oldoperator['operator_image'] = $oldoperator['operator_image'] ;
        }

        $oldoperator->update($newoperator);
        \Session::flash('success','Operator Updated successfully');
        return redirect('operators/index');

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
           $operator = Operator::findOrfail($id);
            
           if (file_exists($operator->operator_image)) //Deleting Operator Image
            {    
                     unlink($operator->operator_image);
            } 

            $operator->delete();
            \Session::flash('success','Operator has been Deleted Successfully');
            return redirect('operators/index'); 
        }
    }
}
