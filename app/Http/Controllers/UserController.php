<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function showRegForm()
    {
        return view('register');
    }

    public function processForm(Request $request)
    {
        $validateData = $request->validate([
            'username' => 'required|min:3|max:50',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/');
    }

    public function user(User $user){
        return view('user', ['user' => $user]);
    }

    public function userEdit(User $user){
        return view('user-edit', ['user' => $user]);
    }

    public function userUpdate(Request $request, User $user){
        $validateData = $request->validate([
            'username' => 'required|min:3|max:50',
            'password' => 'required|min:8',
        ]);

        $hashedPassword = Hash::make($validateData['password']);

        User::where('id', $user->id)->update([
            'username' => $validateData['username'],
            'password' => $hashedPassword,
        ]);

        return redirect()->route('users.show', ['user' => $user->id]);
    }

    public function userDelete(User $user){
        $user->delete();

        return redirect('/');
    }
}
