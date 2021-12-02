<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Employee;
use App\Http\Requests\UserStore;
use App\Http\Requests\UserEdit;
use App\Http\Resources\EmployeeResource;
class UserController extends Controller
{   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $user = User::all();
        if ($request->has('search')) {
         $user = User::where('username', 'like', "%{$request->search}%")->orWhere('email', 'like', "%{$request->search}%")->get();
        }
        return view('users.index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  // return Employee::all();
        //return EmployeeResource::collection(Employee::all());
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStore $request)
    {   
      $user = User::create([
            'username' => $request->username,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => \Hash::make($request->password),
        ]);
             $eid = \Str::random('6');
            Employee::create(['eid' => \Str::upper($eid),'user_id'=> $user->id]);

         return redirect()->route('user.index')->with('message', 'User Created Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit',compact('user'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserEdit $request, User $user)
    {
            $user->update([
            'username' => $request->username,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
        ]);

         return  redirect()->route('user.index')->with('message', 'User Details Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {   if (auth()->user()->email == $user->email) {
     return redirect()->route('user.index')->with('message', 'You Cannot Boot Master Admin');
    } else {
        $user->employee()->delete();
        $user->delete();
      return  redirect()->route('user.index')->with('message', 'User Trashed Successfully');
    }

    }
}
