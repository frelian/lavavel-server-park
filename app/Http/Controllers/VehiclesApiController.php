<?php

namespace App\Http\Controllers;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehiclesApiController extends Controller
{
    public function store() {

        return response()->json("unitTest", 201);
    }
}
