<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\User;
use App\Models\Interest;

class InterestController extends Controller
{
   
    public function addInterest(Request $request, User $user) // link with user
    {
        // Validate the input data
        $validatedData = $request->validate([
            'Reading' => 'required',
            'Video Games' => 'required',
            'Sports' => 'required',
            'Travelling' => 'required',
        ]);

        
        $interest = $user->interests()->create($validatedData);  // Create a new record in the database

       
        return response()->json(['message' => 'Data created successfully', 'interest' => $interest], 201);
    }
}
