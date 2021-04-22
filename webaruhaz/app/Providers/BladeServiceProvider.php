<?php


namespace App\Providers;


use Illuminate\Support\Facades\Blade;

class BladeServiceProvider
{
    public function boot(){
        Blade::directive('thumbnail', function ($expression) {
            $path = file_exists('images/drink/'.$expression) ? 'images/drink'.$expression : 'images/30songs.jpg';
            return '<img src="' . asset($path) . '"/>';
        });
    }
}
