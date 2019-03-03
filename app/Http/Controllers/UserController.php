<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index()
    {
        $us = User::all();
        return view('User.user', compact('us'));
    }

    public function store(Request $request)
    {
        
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect('user/index');
    }

    public function update(Request $request, User $user)
    {
        $user->update([
            'name' => $request['name_e'],
            'email' => $request['email_e'],
            'password' => Hash::make($request['password_e']),
        ]);

        return redirect('user/index');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/user/index');
    }
}
