<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class CourseController extends Controller
{
    public function index(): View
    {
        $courses = Course::paginate();
    
        return view('pages.courses.index', ['courses' => $courses]);
    }

    public function show(Course $course): View
    {
       

        return view('pages.courses.show', ['course' => $course]);
    
    }
}
