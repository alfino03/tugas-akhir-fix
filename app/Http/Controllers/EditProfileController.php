<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class EditProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view ('client.editprofile', compact('user'));
    }
    
}