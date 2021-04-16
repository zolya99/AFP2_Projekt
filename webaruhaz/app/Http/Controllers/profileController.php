<?php


namespace App\Http\Controllers;


class profileController
{
    public function show(){
        if(!Auth::check())
            abort(403);
        return AppHelper::viewWithGuestId('profile.profile', ['user'=>Auth::user()]);
    }

    public function edit(){
        if(!Auth::check())
            abort(403);
        return AppHelper::viewWithGuestId('profile.editprofile', ['user'=>Auth::user()]);
    }

    public function update(Request $request){
        if(!Auth::check())
            abort(403);
        $user = Auth::user();
        $user->name=$request->get('name');
        $user->email=$request->get('email');
        $user->phone_number=$request->get('phone');
        $user->birth=$request->get('dateofbirth');
        $user->save();
        $user->refresh();
        Auth::user()->refresh();
        return redirect()->route('profile');
    }
}
