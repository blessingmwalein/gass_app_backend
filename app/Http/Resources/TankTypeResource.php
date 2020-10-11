<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TankTypeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name'=>$this->name,
            'description'=>$this->tank_discription,
            'image'=>$this->image_path
        ];
    }
}
