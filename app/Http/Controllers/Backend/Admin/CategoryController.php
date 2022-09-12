<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::latest('id')->paginate(20);
        return view('backend.pages.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.category.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name'=>'required|string|max:100|unique:categories,name',
            'status'=>'nullable|in:on,null'
        ]);

        Category::create([
            'name'            => $request->category_name,
            'slug'            => Str::slug($request->category_name),
            'meta_title'      => $request->meta_title,
            'meta_description' => $request->meta_description,
            'status'          => $request->filled('status')
        ]);

        return redirect()->route('admin.categories.index')->with('success','Category has been saved.');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('backend.pages.category.form', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'category_name'=>'required|string|max:100|unique:categories,name,'.$category->id,
            'status'=>'nullable|in:on,null'
        ]);

        $category->update([
            'name'            => $request->category_name,
            'slug'            => Str::slug($request->category_name),
            'meta_title'      => $request->meta_title,
            'meta_description' => $request->meta_description,
            'status'          => $request->filled('status')
        ]);

        return redirect()->route('admin.categories.index')->with('success','Category has been update.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back()->with('success','Category has been remove.');
    }
}
