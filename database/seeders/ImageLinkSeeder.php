<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Painter;

class ImageLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $painters = Painter::all();

        foreach ($painters as $painter) {
            $folderName = str_replace(' ', '_', $painter->name);
            $folderName = str_replace('ü', 'u¦ê', $folderName);
            $imageLink = "images\\{$folderName}";

            $painter->image_link = $imageLink;
            $painter->save();
        }
    }
}
