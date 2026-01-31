<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Services\WeatherService;

class PostController extends Controller
{
    public function index()
    {
        $weatherService = new WeatherService();
        $weather = $weatherService->getCurrentWeather('Beverwijk');
        return view('posts.index', compact('weather'));
    }
}
