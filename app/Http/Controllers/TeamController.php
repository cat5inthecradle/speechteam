<?php

namespace App\Http\Controllers;

use App\Team;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    public function index() {
        return view('team.index', [
            'teams' => Team::orderBy('title')->get(),
        ]);
    }

    public function show($id)
    {
        return view('team.detail', [
            'team' => Team::find($id)
        ]);
    }
}
