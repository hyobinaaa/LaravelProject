<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ArtistProfilesController extends Controller
{
     public function index($user)
    {
        // dd($user);
        $user=User::findOrFail($user);
        return view('ArtistProfiles.index', [
            'user' => $user,
        ]);
    }


    public function edit($user)
    {
        
        $user=User::findOrFail($user);
        return view('ArtistProfiles.edit', [
            'user' => $user,
        ]);
    }

    public function update(User $user)
    {
        
        $data = request() -> validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => '',
       ]);
       if(request('image')){
        $artpath = request('image')->store('uploaded' , 'public');
       
        auth()->user()->artist()->create([
            'title' => $data['title'],
            'image' => $artpath,
       ]);
       }

       $user->artist->update(array_merge(
          $data,
          ['image' => $artpath]
       ));
       return redirect("/artist/{$user->id}");
    }
}
