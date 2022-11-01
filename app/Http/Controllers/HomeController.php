<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Auth;

class HomeController extends Controller
{
    public function redirectUser(){
        if(auth()->user()->hasRole('admin')){
            return redirect()->route('admin.dashboard');
        }
        if(auth()->user()->hasRole('user')){
            return redirect()->route('user.dashboard');
        }
        if(auth()->user()->hasRole('community')){
            return redirect()->route('community.dashboard');
        }
    }
    public function redirectRegister(){
        return redirect()->route('redirect.register');
    }

    public function userRegister( Request $request){
        $request->validate( [
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
        ] );

        $data = $request->all();

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
        $user->assignRole('user');

        Auth::login($user);
        $request->session()->flash( 'message', 'user Inserted Successfully' );
        return redirect( '/dashboard' );
    }

    public function communityRegister( Request $request ){
        $request->validate( [
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
        ] );

        $data = $request->all();

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
        $user->assignRole('community');

        Auth::login($user);
        $request->session()->flash( 'message', 'community Inserted Successfully' );
        return redirect( '/dashboard' );
    }
}
