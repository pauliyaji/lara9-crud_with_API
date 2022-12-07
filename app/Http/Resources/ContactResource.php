<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContactResource extends JsonResource
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
            'id'=> $this->id,
            'name'=> $this->name,
            'slug' => $this->slug,
            'mobile'=> $this->mobile,
            'phone'=> $this->phone,
            'email'=> $this->email,
            'address' => $this->address,
            'post_code'=> $this->post_code,
            'city' => $this->city,
            'birthday'=> $this->birthday,
            'created_at'=> $this->created_at,
            'updated_at'=> $this->updated_at,
        ];
    }
}
