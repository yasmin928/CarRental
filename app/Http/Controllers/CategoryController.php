<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
/**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category=Category::get(); //select * from categories
        return view('admin.categories',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.addCategory');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $category = new Category();
        $category->category_name=$request->category_name;
        
        $category->save(); //save the data
        // return response('Data Inserted Succ'); //return
        return redirect('/admin/category');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category=Category::find($id);    
        return view('categories.show',compact('category'));
    }   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category=Category::find($id);
        return view('admin.editCategory',compact('category'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category=Category::find($id);
        $category->category_name=$request->category_name;
        
        $category->save();
        return redirect('/admin/category');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category=Category::find($id)->delete();
        return redirect('/admin/category');
    }
}
