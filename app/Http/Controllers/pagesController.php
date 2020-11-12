<?php

namespace App\Http\Controllers;

use App\pages;
use App\places;
use App\requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class pagesController extends Controller
{
    //

    public function index()
    {
        $pages = pages::all();
        return view('pages.place', compact('pages'));
    }

    // show  page
    public function show($id)
    {

        $page = pages::findOrFail($id);
        $places = places::where('page_id', $page->id)->paginate(9);
        return view('pages.show', compact(['page', 'places']));
    }
    // show  post
    public function places($id)
    {
        $place = places::findOrFail($id);
        $places = places::where('id', '!=', $place->id )->orderBy('id', 'decs')->get()->take(3);
        return view('pages.place', compact(['place', 'places']));
    }
    // show  post
    public function requests(Request $request,$id)
    {
        $place = places::findOrFail($id);
        $rules = requests::rules($request);
        $request->validate($rules);
        $credentials = requests::credentials($request);
        $credentials['place_id'] = $id;
        $requests = requests::create($credentials);
        return redirect()->back()->with('success', 'Add success');
    }
}
