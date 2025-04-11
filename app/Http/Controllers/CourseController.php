<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class CourseController extends Controller
{
    public function index(Request $request): View
    {
        $courses = Course::latest()
            ->whereLike('title', "%{$request->search}%")
            ->orWhereLike('description', "%{$request->search}%")
            ->paginate(15)
            ->withQueryString();
    
        return view('pages.courses.index', ['courses' => $courses]);
    }

    public function show(Course $course): View
    {
       

        return view('pages.courses.show', ['course' => $course]);
    
    }
}
