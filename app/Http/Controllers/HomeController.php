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

        return Inertia::render('Dashboard/Home');
    }

    public function portfolio()
    {
     
        $directories = Storage::directories("public/images/portfolio");
    
        $carousel_images = [];
        foreach ($directories as $directory){
            $images = Storage::files($directory);
            $folder_name = str_replace("public/images/portfolio/", "", $directory);
            $carousel_images[$folder_name] = [];
            foreach ($images as $image){
                $image = Storage::url($image);
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
        return Inertia::render('Dashboard/Home');
    }

    //
    public function contact()
    {
        return Inertia::render('Dashboard/Index');
    }

    public function test(){
        $directories = Storage::directories("public/images/portfolio");
    
        $files = [];
        foreach ($directories as $directory){
            $images = Storage::files($directory);
            $folder_name = str_replace("public/images/portfolio/", "", $directory);
            $files[$folder_name] = [];
            foreach ($images as $image){
                $image = Storage::url($image);
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
