<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Auth; 
use App\Http\Requests;
use App\Http\Requests\CategoryRequest;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('categories/index',compact('categories'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = null;
        return view('categories.input',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
         $category =  new Category();
         $category->title = $request->title;
         \Session::flash('success','Category Added Successfully');
         $category->save() ;
         return redirect('categories/index');    
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
        $category = Category::findOrFail($id) ;
        return view('categories.input',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        $oldcategory = Category::findOrfail($id); 
        $newcategory = $request->all();
        $oldcategory->update($newcategory);
        \Session::flash('success','Category Updated successfully');
        return redirect('categories/index');    
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
           $category = Category::findOrfail($id);
           $category->delete();
           \Session::flash('success','Category has been Deleted Successfully');
           return redirect('categories/index'); 
        }
    }
}