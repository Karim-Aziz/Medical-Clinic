<?php

namespace App\Http\Controllers;

use App\our_team;
use Illuminate\Http\Request;

class ourTeamController extends Controller
{
    //
    public function index()
    {
        $our_team = our_team::all();
        return view('our_team.index', compact('our_team'));
    }
}
