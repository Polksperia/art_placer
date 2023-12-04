<?php

namespace App\Http\Controllers;
use App\Models\Painter;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function gameScreen()
    {
        $painter = Painter::inRandomOrder()->first();

        $randomImageNumber = rand(1, $painter->paintings);

        $nameUnderscore = str_replace(' ', '_', $painter->name);
        $nameUnderscore = str_replace('ü', 'u¦ê', $nameUnderscore);

        $imageName = "{$painter->image_link}\\{$nameUnderscore}_{$randomImageNumber}.jpg";

        return view('game')->with(compact("painter", "imageName"));
    }
}
//public\images\Amedeo_Modigliani\Amedeo_Modigliani_5.jpg