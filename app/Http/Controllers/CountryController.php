<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use Auth; 
use App\Http\Requests;
use App\Http\Requests\CountryRequest;
use App\Http\Controllers\Controller;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::all();
        return view('countries/index',compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $country = null;
        return view('countries.input',compact('country'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CountryRequest $request)
    {
         $country =  new Country();
         $country->title = $request->title;
         \Session::flash('success','Country Added Successfully');
         $country->save() ;
         return redirect('countries/index');
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
        $country = Country::findOrFail($id) ;
        return view('countries.input',compact('country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CountryRequest $request, $id)
    {
        $oldcountry = Country::findOrfail($id);
        $newcountry = $request->all();
        if($oldcountry->title == $newcountry['title'])
        {
            $oldcountry->update($newcountry);
            \Session::flash('success','Country Title Updated Successfully');
            return redirect('countries/index');
        }
        else if($oldcountry->title != $newcountry['title'])
        {
            $count = Country::where('title','=',$newcountry['title'])->count();
            if($count == 0)
            {
                $oldcountry->update($newcountry);
                \Session::flash('success','Country Title Updated Successfully');
                 return redirect('countries/index');
            }
            else
            {
                 \Session::flash('failed','Country Title Exist , No Changes');
                 return redirect('countries/index');
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
           $country = Country::findOrfail($id);
           $country->delete();
           \Session::flash('success','Country  has been Deleted Successfully');
           return redirect('countries/index'); 
        }
    }
}
