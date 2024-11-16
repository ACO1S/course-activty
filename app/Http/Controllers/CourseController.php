<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function getAllUsers()
    {
        $courses = Course::with('users')->get();
        return view('list_of_users_course', ['courses' => $courses]);
    }
}
