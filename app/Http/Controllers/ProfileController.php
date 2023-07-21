<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(Request $request, User $user)
    {
        return view('profile', ['user' => $user->load('interests')]); // get user details  with interest
    }
}