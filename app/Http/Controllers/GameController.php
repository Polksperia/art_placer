<?php

namespace App\Http\Controllers;
use App\Models\Painter;
use App\Models\User;

use Illuminate\Http\Request;

class GameController extends Controller
{
    private $painter;
    private $imageName;
    public function gameScreen()
    {
        $this->painter = Painter::inRandomOrder()->first();
        $randomImageNumber = rand(1, $this->painter->paintings);
        $nameUnderscore = str_replace(' ', '_', $this->painter->name);
        $nameUnderscore = str_replace('ü', 'u¦ê', $nameUnderscore);
        $this->imageName = "{$this->painter->image_link}\\{$nameUnderscore}_{$randomImageNumber}.jpg";
        return view('game', [
            'painter' => $this->painter,
            'imageName' => $this->imageName
        ]);
    }

    public function matched()
    {
        return view('matched');
    }

    public function notMatched()
    {
        return view('not-matched');
    }
}
//public\images\Amedeo_Modigliani\Amedeo_Modigliani_5.jpg