<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class adminResource extends JsonResource
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
            'user' => $this->username,
            'email' => $this->email,

        ];
    }
}
