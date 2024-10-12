<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Auth;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonial=Testimonial::get(); 
        return view('admin.testimonials',compact('testimonial'));
    }
    public function create()
    {
        $testimonial=Testimonial::all();
        return view('admin.addTestimonials', compact('testimonial'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $testimonial = new Testimonial();
        $testimonial->name=$request->name;
        $testimonial->position=$request->position;
        $testimonial->content=$request->content;
        // $testimonial->published=$request->published ? 1 : 0;
        $testimonial->image=$request->image;
        $testimonial->user_id= Auth::id();;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('testimonials');
            $validated['image'] = $imagePath;
        }
        
        $testimonial->save(); //save the data
        // return response('Data Inserted Succ'); //return
        return redirect('/admin/testimonial');

    }


    public function show(string $id)
    {
        $testimonial=Testimonial::find($id);   
        return view('testimonials.show',compact('testimonial'));
    }

    public function edit(string $id)
    {
        $testimonial=Testimonial::find($id);
        return view('admin.editTestimonials',compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $testimonial=Testimonial::find($id);
        $testimonial->name=$request->name;
        $testimonial->position=$request->position;
        $testimonial->content=$request->content;
        // $testimonial->published=$request->published ? 1 : 0;
        $testimonial->image=$request->image;
        $testimonial->user_id=$request->user_id;
        $testimonial->save();
        return redirect('/posts/testimonials');
    }

    public function destroy(string $id)
    {
        $testimonial=Testimonial::find($id)->delete();   //soft delete i can restore the data after deleteing
        return redirect('/admin/testimonials');

    }

    
}
