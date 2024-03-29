<?php

namespace App\Http\Controllers;

// use App\User;
use App\User;
use Illuminate\Http\Request;
// use App\User;

class PlayersProfileController extends Controller
{
    public function index(User $user)
    {
        //$userPlayer = User::findorfail($user);
        // return $user->user_name;
        // $userPlayer = User::find($user);
        return view('profiles.index', compact('user'));
    }


    // public function edit(\App\User $user){
    //     return 'works';
    // }
    public function create(){
        return view('adminPlayer.players_profile.create_profile');

    }

    public function edit(User $user)
    {
        // $userPlayer = User::findorfail($user);
        // return $user->user_name;
        // $userPlayer = User::find($user);
        //return view('profiles.edit');
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user){
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image'   =>  ''
        ]);

        auth()->$user->profile->update($data);
        return redirect("/player-profile/{$user->id}");
    }
    public function view(){
        return view('users.players.profile');
    }
}
