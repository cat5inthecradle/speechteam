<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Student;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function index()
    {
        return view('student.index', [
            'students' => Student::orderBy('name')->get(),
        ]);
    }

    public function show($id)
    {
        return view('student.detail', [
            'student' => Student::find($id)
        ]);
    }
}
