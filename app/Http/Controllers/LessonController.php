<?php

namespace App\Http\Controllers;

use App\Models\Lessons;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function show(Lessons $lesson)
    {
        return view('pages.lessons.show', compact('lesson'));
    }
}
