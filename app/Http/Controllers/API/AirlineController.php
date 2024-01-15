<?php

namespace App\Http\Controllers\API;


use App\Models\airline;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests\AirlineRequest;
use Illuminate\Support\Facades\Validator;


class AirlineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $per_page =$request->get('per_page',25);
        $Airline= airline ::paginate($per_page);
        return response()->json($Airline);
    }

    /**
     * Show the form for creating a new resource.
     */
  //  public function create(Request $request)
  //  {
   //     $Airline= airline::create([
   //         'name'=>$requset->name,
     //       'code'=>$requset->code,
      //      'country'=>$requset->country,
        //    'founded_year'=>$requset->founded_year
          //  ]);
           // if($Airline){
             //   return response()->json(['message'=>'Successfully created']);
            //}else{
              //  return response()->json([
                //    'status'=>404,
                  //  'message'=>"DATA NOT created"
                //],404);
           // }
   // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          
        $Airline=airline::create($request->all());
        return response()->json([
            'status'=>201,
            'artist'=>$artist
        ],201);
    }
      
       
    

    /**
     * Display the specified resource.
     */
    public function show(string $code)
    {
        $Airline= airline ::findOrFail($code);
        return response()->json( $Airline);
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
    public function update(Request $request, string $code)
    {
        $Airline = airline::findOrFail($code);
        $Airline ->update($request->all());
        return response()->json($Airline);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $code)
    {
        $Airline = airline::findOrFail($code);
        $Airline->delete();
        return response()->json([
            'status'=>200,
            'message'=>'airline deleted successfully',
        
        ],200);
    }
}
