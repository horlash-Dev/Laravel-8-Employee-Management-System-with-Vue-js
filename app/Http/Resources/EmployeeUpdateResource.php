<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeUpdateResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
                return [

            'firstname' => $this->first_name,
            'lastname' => $this->last_name,
            'middlename' => $this->middle_name,
            'address' => $this->address,
            'state' => $this->state_id,
            'country' => $this->country_id,
            'city' => $this->city_id,
            'department' => $this->department_id,
            'date_hired' => $this->date_hired,
            'dob' => $this->dob,
            'zipcode' => $this->zipcode,
            'experience' => $this->experience,
            'user' => $this->user->username,

        ];
    }
}
