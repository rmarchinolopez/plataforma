<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideosController extends Controller
{
    public function videos() {
        $videos = [
            ['id' => '1', 'url' => 'https://www.w3schools.com/html/mov_bbb.mp4'],
            ['id' => '2', 'url' => 'https://www.w3schools.com/html/mov_bbb.mp4'],
            ['id' => '3', 'url' => 'https://www.w3schools.com/html/mov_bbb.mp4'],
            ['id' => '4', 'url' => 'https://www.w3schools.com/html/mov_bbb.mp4'],
        ];
        return response()->json($videos);
    }
}
