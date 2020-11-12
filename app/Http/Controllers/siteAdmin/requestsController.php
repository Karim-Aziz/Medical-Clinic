<?php

namespace App\Http\Controllers\siteAdmin;

use App\requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class requestsController extends Controller
{
    // check if is admin 
    public function __construct()
    {
        $this->middleware('Admin');
    }
    // show conttact maessages
    public function index()
    {
        $requests = requests::all();
        return view('siteAdmin.requests.index', compact('requests'));
    } 
}
