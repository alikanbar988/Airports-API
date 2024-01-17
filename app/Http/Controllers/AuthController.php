<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
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

        // Authenticate the user
        Auth::login($user);

       
    }

    public function login(Request $request)
    {
        // Validate the user input
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Attempt to log in the user
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
          return response()->json([
            'status'=>'201',
            'message'=>'USER LOGIN SUCCFULLY'
          ],201);
        }else {
            return response()->json([
                'status'=>'404',
                'mesasge'=>'somethings was worng'
            ],404);
          }
            
        }

       
    }




