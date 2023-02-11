<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function signIn (Request $request) {
        $fields = $request->validate([
            'name'=>'required|string',
            'email'=>'required|string',
            'password'=>'required|string',
            'c_password'=>'required|same:password'
        ]);

        $user = User::create([
            'name' => $fields['name'],
            'email'=> $fields['email'],
            'password'=> bcrypt($fields['password'])
        ]);
        $success['token'] = $user->createToken('MyApp')->accessToken;
        return $success;
    }

    public function login (Request $request) {
        if(Auth::attempt(
            ['email'=>$request->email , 'password'=>$request->password])
    ){
            $user = Auth::user();
            $suc['token'] = $user->createToken('myApp')->accessToken;
            $suc['name'] = $user->name;
            return $suc['token'] ;

        }
        else {
            return 'lol';
        }

    }


}
