<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
       public function index(Request $request)
    {   $country = Country::all();
        if ($request->has('search')) {
         $country = Country::where('name', 'like', "%{$request->search}%")->orWhere('country_code', 'like', "%{$request->search}%")->get();
        }
        return view('countries.index',compact('country'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('countries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $request->validate(['name'=>['required','string', 'min:3'],'country_code'=>['required','string', 'min:3']]);
         Country::create([
            'name' => $request->name,
            'country_code' => $request->country_code,
        ]);

         return redirect()->route('country.index')->with('message', 'Country Created Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        return view('countries.edit',compact('country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country)
    {  $request->validate(['name'=>['required','string', 'min:3'],'country_code'=>['required','string', 'min:3']]);
            $country->update([
            'name' => $request->name,
            'country_code' => $request->country_code,
        ]);
         return  redirect()->route('country.index')->with('message', 'country Details Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {   
    $country->delete();
      return  redirect()->route('country.index')->with('message', 'country Trashed Successfully');
    }
}
