<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        
     
        return view('arts.create');
    }

    public function store()
    {
        
     
       $data = request() -> validate([
            'title' => 'required',
            'image' => ['required', 'image'],
       ]);
       $artpath = request('image')->store('uploaded' , 'public');
       auth()->user()->arts()->create([
            'title' => $data['title'],
            'image' => $artpath,
       ]);

     return redirect('/artist/' . auth()->user()->id);
    }
    public function show(\App\Models\Art $art)
    {
        // dd($art);
        return view('arts.show', [
            'art' => $art
        ]);
    }
}
