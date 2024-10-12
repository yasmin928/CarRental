<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Category;

use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $car=Car::get(); //select * from categories
        return view('admin.cars',compact('car'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $car=Car::all();
        $category = Category::all(); // Fetch all categories
        
        return view('admin.addCar', compact('car','category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $car = new Car();
        $car->title=$request->title;
        $car->content=$request->content;
        $car->luggage=$request->luggage;
        $car->doors=$request->doors;
        $car->price=$request->price;
        // $car->active=$request->active;
        $car->passengers=$request->passengers;
        $car->image=$request->image;
        $car->category_id=$request->category_id;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            dd($imagePath);
            dd($car->image);
            $validated['image'] = $imagePath;
        }
        
        $car->save(); //save the data
        // return response('Data Inserted Succ'); //return
        return redirect('/admin/car');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
{
    $car = Car::find($id);
    if (!$car) {
        return redirect()->route('listing')->with('error', 'Car not found');
    }
    return view('single', compact('car'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $car=Car::find($id);
        $category = Category::all(); // Fetch all categories
        return view('admin.editCar',compact('car', 'category'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $car=Car::find($id);
        $car->title=$request->title;
        $car->content=$request->content;
        $car->luggage=$request->luggage;
        $car->doors=$request->doors;
        $car->price=$request->price;
        // $car->active=$request->active;
        $car->passengers=$request->passengers;
        $car->image=$request->image;
        $car->category_id=$request->category_id;
        
        $car->save();
        return redirect('/admin/car');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $car=Car::find($id)->delete();
        return redirect('/admin/car');
    }

    public function latestCars()
    {
        $cars = Car::latest()->take(6)->get(); // Get the latest 6 cars
        return view('listing', compact('cars'));
    }
}
