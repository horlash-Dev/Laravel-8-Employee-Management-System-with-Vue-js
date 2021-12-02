<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\EmployeeResource;
use App\Http\Resources\EmployeeUpdateResource;
use App\Http\Resources\adminResource;
use App\Models\Employee;
use App\Models\Country;
use App\Models\Department;
use App\Models\State;
use App\Models\City;
use App\Models\User;

class EmployeeData extends Controller
{  

    public function all_employee(Request $request)
    { 
     $employee =  Employee::all();
     if ($request->has('s')) {
          $employee = Employee::where('eid', 'like', "%{$request->s}%")->orWhere('first_name', 'like', "%{$request->s}%")->get() ?? abort(404);
        }
    return EmployeeResource::collection($employee);
    }
    public function getCountry()
    {   $country = Country::all();
        return  response()->json($country);
    }
        public function getDept()
    {
           $Department = Department::all();
        return  response()->json($Department);
    }
        public function getCity($id)
    {   $state = State::Firstwhere('id', $id);
        $state->city;
        return  response()->json($state);
    }
        public function getState($id)
    {
         $country = Country::Firstwhere('id', $id);
         $country->state;
        return  response()->json($country);
    }

        public function getDetails($id)
    {
         $detail = Employee::Firstwhere('eid', $id);
        return new EmployeeUpdateResource($detail);
    }

    public function getUser(User $eid)
    {   if ($eid->employee) {
        $user = Employee::Firstwhere('eid', $eid->employee->eid); 
        return new EmployeeResource($user);
    }
     if ($eid->employee == '') {
        $user = $eid;
    }
    return new adminResource($user);
    }

    public function storeDetails(Request $request, $id)
    {  
        $storeDetail = Employee::Firstwhere('eid', $id);
        
             $storeDetail->first_name = $request->firstname;
             $storeDetail->last_name = $request->lastname;
             $storeDetail->middle_name = $request->middlename;
             $storeDetail->address = $request->address;
             $storeDetail->state_id = $request->state;
             $storeDetail->country_id = $request->country;
             $storeDetail->city_id = $request->city;
             $storeDetail->department_id = $request->department;
             $storeDetail->date_hired = $request->date_hired;
             $storeDetail->dob = $request->dob;
             $storeDetail->zipcode = $request->zipcode;
             $storeDetail->experience = $request->experience;
             $storeDetail->save();

        return  response()->json('Done.');
    }

}
