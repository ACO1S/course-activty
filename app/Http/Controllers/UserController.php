<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function showProfile(Request $request)
    {
        $user = User::with('profile')->find($request->id);

        return view('show_user_profile', ['user' => $user]);
    }

    public function getAllCourses(Request $request)
    {
        $user = User::with('courses')->find($request->id);
        return view('list_of_user_courses', ['user' => $user]);
    }
}