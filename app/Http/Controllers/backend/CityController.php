<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\State;
use App\Models\City;

class CityController extends Controller
{
        public function index(Request $request)
    {   $city = City::all();
        if ($request->has('search')) {
         $city = City::where('name', 'like', "%{$request->search}%")->get();
        }
        return view('cities.index',compact('city'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { $state =  State::all();
        return view('cities.create',compact('state'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $request->validate(['name'=>['required','string'],'state_id'=>['required']]);
         City::create([
            'name' => $request->name,
            'state_id' => $request->state_id,
        ]);

         return redirect()->route('city.index')->with('message', 'City Created Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(City $city)
    {    $state = State::all();
        return view('cities.edit',compact('city','state'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, City $city)
    {  $request->validate(['name'=>['required','string'],'state_id'=>['required','integer']]);
            $city->update([
            'name' => $request->name,
            'state_id' => $request->state_id
        ]);
         return  redirect()->route('city.index')->with('message', 'City Details Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {   
    $city->delete();
      return  redirect()->route('city.index')->with('message', 'City Trashed Successfully');
    }
}
