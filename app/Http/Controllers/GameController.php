<?php

namespace App\Http\Controllers;
use App\Models\Painter;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function gameScreen()
    {
        return view('game')->with('painters', $painters);
    }
}
