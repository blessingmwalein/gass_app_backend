<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TankType;

use App\Http\Resources\TankTypeCollection as TankTypeCollection;
use App\Http\Resources\TankTypeResource as TankTypeResource;


class TankTypeController extends Controller
{
    //
    public function index(){

        return new TankTypeCollection(TankType::paginate(10));
    }

    public function show(TankType $tanktype){
        return new TankTypeResource($tanktype);
    }
}
