<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;
use App\Category;

class CategoryController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::all();

        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryStoreRequest $request)
    {
        //
        $request->validated();
        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->image_path = '';

        if($category->save()) {
            if($request->hasFile('image_path')) {
                $extension = $request->file('image_path')->getClientOriginalExtension();

                $filename = $category->id . '.' . $extension;

                $path = $request->file('image_path')->storeAs('categories', $filename);
                $category->image_path = $filename;
                $category->save();
            }
        }

        return redirect()->route('categories.index')->with('success', 'Category has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $category = Category::find($id);

        $images = [];
        array_push($images, '/storage/categories/' . $category->image_path);
        $categoryImage = $images;

        return view('admin.categories.edit', compact('category', 'categoryImage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryStoreRequest $request, $id)
    {
        //
        $category = Category::find($id);
        $category->name = $request->get('name');
        $category->description = $request->get('description');
        $category->image_path = $category->image_path;

        if($category->save()) {
            if($request->hasFile('image_path')) {
                $extension = $request->file('image_path')->getClientOriginalExtension();

                $filename = $category->id . '.' . $extension;

                $path = $request->file('image_path')->storeAs('categories', $filename);
                $category->image_path = $filename;
                $category->save();
            }
        }

        return redirect()->route('categories.index')->with('success', 'Category has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $category = Category::find($id);
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category has been deleted');
    }
}
