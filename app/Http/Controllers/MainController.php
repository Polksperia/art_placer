<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function showAboutUs()
    {
        return view('about-us');
    }

    public function showLeaderboard()
    {
        $users = User::orderBy('highest_streak', 'desc')->take(10)->get();

        return view('leaderboard', ['users' => $users]);
    }
}
