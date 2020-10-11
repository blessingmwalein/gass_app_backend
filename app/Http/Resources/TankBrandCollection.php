<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class TankBrandCollection extends ResourceCollection
{
    public $collects = 'App\Http\Resources\TankBrandResource';

    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'TankBrands'=>$this->collection
        ];
    }
}
