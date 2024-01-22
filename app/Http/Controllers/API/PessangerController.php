<?php

namespace App\Http\Controllers\API;

use App\Models\pessanger;
use Illuminate\Http\Request;
use  App\Http\Requests\pessangerRequest;
use App\Http\Controllers\Controller;

class PessangerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(request $request)
    {
        $per_page =$request->get('per_page',25);
        $Pessanger=pessanger::paginate($per_page);
        return response()->json($Pessanger);
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
        $Pessanger=pessanger::create($request->all());
        return response()->json([
            'status'=>201,
            'pessanger'=>$Pessanger
        ],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Pessanger=pessanger::findOrFail($id);
        return response()->json( $Pessanger);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Pessanger=pessanger::findOrFail($id);
        $Pessanger->update($request->all());
        return response()->json($Pessanger);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      $Pessanger = pessanger::findOrFail($id);
      $Pessanger->delete();
        return response()->json([
            'status'=>200,
            'message'=>'pessanger deleted successfully',
        
        ],200);
    }
}
