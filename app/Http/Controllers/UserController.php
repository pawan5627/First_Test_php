<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Interest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'dob' => 'required|date_format:d/m/Y', //  DOB is in dd/mm/yyyy format
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
         
        ]);

        $userData = $request;
        $userData['password'] = Hash::make($request->input('password'));

        $user = User::create($userData);

        return response()->json(['message' => 'User registered successfully', 'user' => $user], 201);
    }

}
