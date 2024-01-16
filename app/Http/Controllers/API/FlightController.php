<?php

namespace App\Http\Controllers\API;

use App\Models\flight;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(request $request)
    {
        $per_page =$request->get('per_page',25);
        $flight=flight::paginate($per_page);
        return response()->json($flight);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $flight=flight ::create($request->all());
        return response()->json([
            'status'=>201,
            'flight'=>$flight
        ],201);
    }
     

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $flight=flight::findOrFail($id);
        return response()->json( $flight);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {   
        $flight=flight::findOrFail($id);
        $flight ->update($request->all());
        return response()->json($flight);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $flight=flight::findOrFail($id);
        $flight->delete();
        return response()->json([
            'status'=>200,
            'message'=>'flights deleted successfully',
        
        ],200);
    }
}
