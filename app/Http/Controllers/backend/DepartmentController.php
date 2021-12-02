<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
class DepartmentController extends Controller
{
       public function index(Request $request)
    {   $department = Department::all();
        if ($request->has('search')) {
         $department = Department::where('name', 'like', "%{$request->search}%")->get();
        }
        return view('department.index',compact('department'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('department.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $request->validate(['name'=>['required','string', 'min:3']]);
         Department::create([
            'name' => $request->name,
        ]);

         return redirect()->route('department.index')->with('message', 'Department Created Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        return view('department.edit',compact('department'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $department)
    {  $request->validate(['name'=>['required','string', 'min:3']]);
            $department->update([
            'name' => $request->name,
        ]);
         return  redirect()->route('department.index')->with('message', 'Department Details Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {   
    $department->delete();
      return  redirect()->route('department.index')->with('message', 'Department Trashed Successfully');
    }
}
