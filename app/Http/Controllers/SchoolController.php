<?php

namespace App\Http\Controllers;

use App\School;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SchoolController extends Controller
{
    public function index()
    {
        return view('school.index', [
            'schools' => School::orderBy('name')->get(),
        ]);
    }

    public function show($id)
    {
        return view('school.detail', [
            'school' => School::find($id)
        ]);
    }
}
