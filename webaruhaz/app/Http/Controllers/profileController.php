<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\AppHelper;


class profileController
{
    public function index(){
        if(!Auth::check())
            abort(403);
        return view('profile_edit', ['user'=>Auth::user()]);
    }



    public function update(Request $request){
        if(!Auth::check())
            abort(403);
        $user = Auth::user();
        $user->name=$request->get('name');
        $user->email=$request->get('email');
        $user->phone_number=$request->get('phone_number');
        $user->sex=$request->get('sex');
        $user->birth=$request->get('birth');
        $user->save();
        $user->refresh();
        Auth::user()->refresh();
        return redirect()->route('profile');
    }
}
