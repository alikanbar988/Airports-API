<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register (request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);
         $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        $access_token =$user->createToken('authToken')->plainTextToken;
        if($user){
            return response()->json([
                'status'=>'201',
                'message'=>'User has been created successfully.',
                'token'=> $access_token
                ], 201);
        }else{
            return response()->json([
                'status'=>'404',
                'message'=>'somethings was worng'
                ], 404);
        }

        // Authenticate the user
        Auth::login($user);

       
    }

    public function login(request $request)
    {
        // Validate the user input
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Attempt to log in the user
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user=Auth::user();
            $access_token =$user->createToken('authToken')->plainTextToken;
           
          return response()->json([
            'status'=>'201',
            'message'=>'USER LOGIN SUCCFULLY',
            'token'=>$access_token
          ],201);
        }else {
            return response()->json([
                'status'=>'404',
                'mesasge'=>'somethings was worng'
            ],404);
          }
            
        }
        }

       
    




