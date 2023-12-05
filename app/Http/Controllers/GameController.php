<?php

namespace App\Http\Controllers;
use App\Models\Painter;
use App\Models\User;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function gameScreen()
    {
        $this->loadData();
        return view('game', [
            'painter' => $this->painter,
            'imageName' => $this->imageName,
            'streak' => $this->streak
        ]);
    }

    public function matched()
    {
        $this->loadData();
        $this->incrementStreak();
        return view('matched', [
            'painter' => $this->painter,
            'imageName' => $this->imageName,
            'streak' => $this->streak
        ]);
    }

    private function loadData()
    {
        $this->painter = $this->getPainterFromFile();
        $this->imageName = $this->getImageNameFromFile();
        $this->streak = $this->getStreakFromFile();

        if (!$this->painter || !$this->imageName || !$this->streak) {
            $this->generateData();
            $this->storeData();
        }
    }

    private function generateData()
    {
        $this->painter = Painter::inRandomOrder()->first();
        $randomImageNumber = rand(1, $this->painter->paintings);
        $nameUnderscore = str_replace(' ', '_', $this->painter->name);
        $nameUnderscore = str_replace('ü', 'u¦ê', $nameUnderscore);
        $this->imageName = "{$this->painter->image_link}\\{$nameUnderscore}_{$randomImageNumber}.jpg";
        $this->streak = 0;
    }

    private function storeData()
    {
        file_put_contents($this->painterFile, serialize($this->painter));
        file_put_contents($this->imageNameFile, $this->imageName);
        file_put_contents($this->streakFile, $this->streak);
    }

    private function incrementStreak()
    {
        $this->streak++;
        file_put_contents($this->streakFile, $this->streak);
    }

    // Methods to retrieve data from files (same as before)

    public function not_matched()
    {
        return view('not-matched', [
            'painter' => $this->painter,
            'imageName' => $this->imageName,
            'streak' => $this->streak
        ]);
    }
}
//public\images\Amedeo_Modigliani\Amedeo_Modigliani_5.jpg