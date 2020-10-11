<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TankPropertyResource extends JsonResource
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
            'tank_type_id'=>$this->tank_type_id,
            'tank_brand_id'=>$this->tank_brand_id,
            'price'=>$this->price,
            'qty'=>$this->qty
        ];
    }
}
