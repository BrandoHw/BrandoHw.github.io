<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    //
    public function index()
    {
        return Inertia::render('Dashboard/Home');
    }

    public function about()
    {

        return Inertia::render('Content/About');
    }

    public function portfolio()
    {
     
        $directories = Storage::disk('public_heroku')->directories("images/portfolio");
        $carousel_images = [];
        foreach ($directories as $directory){
            $images = Storage::disk('public_heroku')->files($directory);
            $folder_name = str_replace("images/portfolio/", "", $directory);
            $carousel_images[$folder_name] = [];
            foreach ($images as $image){
                array_push($carousel_images[$folder_name], $image);
            }
        }

        return Inertia::render('Content/Portfolio', [
            'carousel_images' => $carousel_images
        ]);
    }
    //
    public function cv()
    {

        return response()->file('pdfs/cv.pdf');
    
    }

    //
    public function contact()
    {
        return Inertia::render('Content/Contact');
    }

    public function test(){
        $directories = Storage::disk('public_heroku')->directories("images/portfolio");
    
        $files = [];
        foreach ($directories as $directory){
            $images = Storage::disk('public_heroku')->files($directory);
            $folder_name = str_replace("images/portfolio/", "", $directory);
            $files[$folder_name] = [];
            foreach ($images as $image){
                array_push($files[$folder_name], $image);
            }
        }
    
        return array(
            'directory' => $directory, 
            'directories' => $directories,
            'files' => $files
        );
    }
}
