<?php

namespace App\Http\Controllers;
use App\Models\Painter;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GameController extends Controller
{
    private $painter;
    private $imageName;

    public function initialize()
    {
        Session::put('streak', 0);

        return redirect()->action([GameController::class, 'gameScreen']);
    }

    public function gameScreen()
    {

        $this->painter = Painter::inRandomOrder()->first();
        $randomImageNumber = rand(1, $this->painter->paintings);
        $nameUnderscore = str_replace(' ', '_', $this->painter->name);
        $nameUnderscore = str_replace('ü', 'u¦ê', $nameUnderscore);
        $this->imageName = "{$this->painter->image_link}\\{$nameUnderscore}_{$randomImageNumber}.jpg";

        $streak = Session::get('streak', 0);
        Session::put('painterData', [
            'painter' => $this->painter,
            'imageName' => $this->imageName
        ]);

        return view('game', [
            'streak' => $streak,
            'painter' => $this->painter,
            'imageName' => $this->imageName

        ]);
    }

    public function matched()
    {
        $painterData = Session::get('painterData');

        $streak = Session::get('streak', 0) + 1;
        Session::put('streak', $streak);

        return view('matched', [
            'streak' => $streak,
            'painter' => $painterData['painter'],
            'imageName' => $painterData['imageName'],
        ]);
    }

    public function notMatched()
    {
        $user = null;

        $painterData = Session::get('painterData');

        $streak = Session::get('streak', 0);

        if (auth()->check()) {
            $user = User::find(auth()->user()->id);
    
            $highestStreak = $user->highest_streak ?? 0;

            if ($streak > $highestStreak) {
                $user->highest_streak = $streak;
                $user->save();
            }
        }

        return view('not-matched', [
            'user' => $user,
            'streak' => $streak,
            'painter' => $painterData['painter'],
            'imageName' => $painterData['imageName'],
        ]);
    }
}
//public\images\Amedeo_Modigliani\Amedeo_Modigliani_5.jpg