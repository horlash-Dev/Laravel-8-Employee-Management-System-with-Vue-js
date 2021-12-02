<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\State;

class StateController extends Controller
{
        public function index(Request $request)
    {   $state = State::all();
        if ($request->has('search')) {
         $state = State::where('name', 'like', "%{$request->search}%")->get();
        }
        return view('states.index',compact('state'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { $country =  Country::all();
        return view('states.create',compact('country'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $request->validate(['name'=>['required','string'],'country_id'=>['required']]);
         State::create([
            'name' => $request->name,
            'country_id' => $request->country_id,
        ]);

         return redirect()->route('state.index')->with('message', 'State Created Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(State $state)
    {    $country = Country::all();
        return view('states.edit',compact('country','state'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, State $state)
    {  $request->validate(['name'=>['required','string'],'country_id'=>['required','integer']]);
            $state->update([
            'name' => $request->name,
            'country_id' => $request->country_id
        ]);
         return  redirect()->route('state.index')->with('message', 'State Details Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(State $state)
    {   
    $state->delete();
      return  redirect()->route('state.index')->with('message', 'State Trashed Successfully');
    }
}
