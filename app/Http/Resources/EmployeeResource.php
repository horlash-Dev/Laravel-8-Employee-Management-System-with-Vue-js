<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
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
            'user_id' => $this->user_id,
            'user' => $this->user->username,
            'email' => $this->user->email,
            'state' => $this->state['name'],
            'country' => $this->country['name'],
            'city' => $this->city['name'],
            'department' => $this->department['name'],
            'date_hired' => $this->date_hired,
            'dob' => $this->dob,
            'zipcode' => $this->zipcode,
            'reg_on' => $this->created_at,
            'experience' => $this->experience,
            'eid' => $this->eid,
            'uid' => $this->id,

        ];
    }
}
