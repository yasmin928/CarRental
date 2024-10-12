<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\Car;  

class PageController extends Controller
{
 
    public function home()
    {
        return view('welcome');
    }

    public function listing()
    {
        return view('listing');
    }

    public function testimonials()
    {
        $testimonials = Testimonial::where('published', true)->get();
        return view('testimonials2', compact('testimonials'));
    }

    public function blog()
    {
        return view('blog');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    
    public function index()
    {
        $cars = Car::latest()->take(6)->get(); // Get the latest 6 cars
        return view('welcome', compact('cars'));
    }
}


